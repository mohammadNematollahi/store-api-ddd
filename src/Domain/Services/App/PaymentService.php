<?php

namespace Domain\Services\App;

use Domain\Entities\CartItem\CartItem;
use Domain\Entities\Order\Order;
use Domain\Entities\Order\OrderItem;
use Domain\Entities\Payment\Payment;
use Infrastructure\Service\Payment\Pay;

class PaymentService
{

    public function __construct(/* what do you want to connection elequent */)
    {
    }

    public function payment($attributes)
    {

        $amount = CartItem::all()->sum("product.price");
        $result = json_decode(Pay::send(env("PAY_TOKEN_API"), $amount, route("payment.callback")));
        if ($result->status == 1) {
            return response()->json(["path" => "https://pay.ir/pg/" . $result->token]);
        }

        //another type of payment you can to write like cache , 
    }


    public function callback($attributes)
    {
        $result = json_decode(Pay::verify(env("PAY_TOKEN_API"), $attributes["token"]));
        $user = auth()->user();

        if ($result->status == 1) {

            $this->setBuy($result, $user);

            return response()->json([
                "message" => "success",
                "data" => $result
            ]);
        }

        $this->setPaymnetAndOrder($result, $user);

        return response()->json([
            "message" => "error",
            "data" => $result
        ]);

    }


    private function setBuy($result, $user)
    {

        $data = $this->setPaymnetAndOrder($result, $user);

        $cartItems = CartItem::where("user_id", 2);


        $cartItems->get()->each(function ($item) use ($user, $data) {
            OrderItem::create([
                "price" => $item->product->price,
                "product_id" => $item->product->id,
                "user_id" => 2,
                "order_id" => $data['order']->id,
                "payment_id" => $data['payment']->id
            ]);
        });

        $cartItems->truncate();
    }

    private function setPaymnetAndOrder($result, $user)
    {
        $payment = Payment::create([
            "price" => $result->amount,
            "response_bank" => $result,
            "user_id" => 2,
            "status" => 1,
        ]);

        $order = Order::create([
            "status" => 1,
            "final_price" => $result->amount,
            "user_id" => 2,
            "payment_id" => $payment->id
        ]);

        return [
            "payment" => $payment,
            "order" => $order
        ];
    }

}