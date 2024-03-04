<?php

declare(strict_types=1);

namespace App\E20UnitTesting;

use App\E20UnitTesting\Exception\RouteNotFoundException;
use App\E20UnitTesting\Library\Router;
use App\E20UnitTesting\Library\View;

class App
{
    private static DB $db;

    public function __construct(protected Router $router, protected array $request, protected Config $config)
    {
        static::$db = new DB($config->database ?? []);
    }

    public static function db(): DB
    {
        return static::$db;
    }

    public function run(): void
    {
        try {
            echo $this->router->resolve(
                $this->request['uri'],
                strtolower($this->request['method'])
            );
        } catch (RouteNotFoundException) {
            http_response_code(404);
            echo View::make('error/404');
        }
    }
}