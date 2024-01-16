<?php

declare(strict_types=1);

namespace App\E19MVC\Exception;

class RouteNotFoundException extends \Exception
{
    protected $message = '404 route not found!';
}