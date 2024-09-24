<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[WebReinvent](https://webreinvent.com/)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Jump24](https://jump24.co.uk)**
- **[Redberry](https://redberry.international/laravel/)**
- **[Active Logic](https://activelogic.com)**
- **[byte5](https://byte5.de)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
# laravel-ddd

You can use the ddd (domain dirver design) pattern in Laravel 10 

## Things you need to know :

### First of all, I have to say that you should not forget to enter this command to add the vendor file to the project 


```php
composer update
```

# But what does the structure look like ?


## Folder structure :


![Screenshot 2024-08-03 143141](https://github.com/user-attachments/assets/29469ab2-aee1-4093-bb8f-80f1e02cd289)


### Application : The application folder is responsible for storing important app applications

![Screenshot 2024-08-04 122951](https://github.com/user-attachments/assets/da5bee90-52c5-4bc5-aa0e-e3bcf867f357)


### Domain : The domain folder is responsible for storing project ideas such as: models, repositories, and services.

![Screenshot 2024-08-04 123042](https://github.com/user-attachments/assets/f06525e5-ace8-40de-b27c-e3ddd0f845de)

- Entities : In this folder we will add the models (or the same ideas or features of our project) 

- Repositories : In this folder we hit our elequent relationships, or for other purposes, what elequent does this feature have ? 

- Services : In this section, the connection between elequent and the controller is done, which means that we manage the conditions or the things that we used to do in the controllers in this folder


### Infrastructure : The Infrastructure folder is responsible for executing the ideas and the core of the project

![Screenshot 2024-08-04 123121](https://github.com/user-attachments/assets/dc82d3e3-5e87-4fe6-a6dd-f1ad90555102)


- Repositories : In this folder we run the elequents that we wrote in the DomainRepositories folder

- Services : This folder stores your services such as email, image, etc.


# You may be confused !!.

- #### It's okay to open the project for a better understanding and see a written test sample, which is in the following structure, and you can continue with the same structure:

#### As we said, the folder (Domain/Entities/) is ideas or features of our project, don't worry, our same models will be placed in this folder where you can see the user model.

![Screenshot 2024-08-04 124913](https://github.com/user-attachments/assets/b96a449b-80ce-4527-a2bb-624f87081b57)

#### In order to make the structure better, there is a folder in the Domain/Repositories path to better understand what elequents are written for this feature or model 

![Screenshot 2024-08-04 125038](https://github.com/user-attachments/assets/f578c54d-f190-4722-97f7-149001fd8b54)

- So in order to be able to enforce a rule, it is better to use a class that is located in the Infrastructure/Repositories folder, which holds the elequents folder of each attribute within itself

![Screenshot 2024-08-04 125831](https://github.com/user-attachments/assets/8b4c6ddd-6a57-41be-acbc-8c54640d5580)

#### And finally, for the communication between controllers, elequents, as well as management on data, we have another folder available for this task, which is located in the Domain/Services path. 

![Screenshot 2024-08-04 130300](https://github.com/user-attachments/assets/35d8a3dd-657c-4a3c-a3e9-e2f14e65ac14)


#### And finally, run the service in the controller of your choice :

```php
<?php

namespace Infrastructure\Http\Controllers;

use Domain\Services\User\UserService;
use Infrastructure\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function __construct(public UserService $userService){

    }

    public function index()
    {
        return view("welcome");
    }

    public function showUsers()
    {
        return $this->userService->all();
    }
}
```

# commands :

```php

  ddd:controller  Create a new controller calss in laravel ddd
  ddd:elequent    Create a new elequent calss for connection with repository in laravel ddd
  ddd:middleware  Create a new middleware calss in laravel ddd
  ddd:model       Create a new model calss in laravel ddd
  ddd:provider    Create a new provider calss in laravel ddd
  ddd:repository  Create a new interface for methods elequent in laravel ddd
  ddd:request     Create a new request calss in laravel ddd
  ddd:service     Create a new srevice calss for controll elequent in laravel ddd

```

## You can use the following command to view the list of commands :

```php
    php artisan ddd list
```
# store-api-ddd

## Hello every body this is description project

#### Now you are asking yourself, how do I know the paths of this project to test this project? well it's easy you how to doing this way

# - firtst you have to download this project from github
