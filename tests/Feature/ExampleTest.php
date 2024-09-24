<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_create_product(): void
    {
        $this->withoutExceptionHandling();
        $response = $this->postJson(route("product.add.to.cart" , 1) , [
            "address" => "شیراز مالی آباد",
            "user_id" => 1,
            "city_id" => 1
        ]);

        $response->assertStatus(201);
        $this->assertDatabaseHas("addresses" ,  ["address" => 'شیراز مالی آباد']);

    }
}
