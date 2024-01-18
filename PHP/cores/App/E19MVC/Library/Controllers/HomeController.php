<?php

namespace App\E19MVC\Library\Controllers;

use App\E19MVC\Library\View;
use PDO;

class HomeController
{
    public function index(): View
    {
        try {
            $db = new PDO('mysql:host=localhost;dbname=test', 'root', '', [
//                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
            ]);

            $email = 'test1@gmail.com';
            $name = 'Test';
            $is_active = 1;
            $created_at = date('Y-m-d h:i:s');

            $query = 'INSERT INTO users (email, full_name, is_active, created_at) VALUES (:email, :name, :active, :date)';

            $stmt = $db->prepare($query);
            $stmt->bindValue(':email', $email);
            $stmt->bindValue(':name', $name);
            $stmt->bindParam(':active', $is_active, PDO::PARAM_BOOL);
            $stmt->bindValue(':date', $created_at);
            $stmt->execute();

            $id = $db->lastInsertId();
            $user = $db->query('SELECT * FROM users where id=' . $id)->fetch();
            echo '<pre>';
            print_r($user);
            echo '</pre>';
        } catch (\PDOException $exception) {
            throw new \PDOException($exception->getMessage(), (int)$exception->getCode());
        }
        var_dump($db);
        return View::make('index', ['foo' => 'bar']);
    }

    public function upload()
    {
        $filePath = STORAGE_PATH . '/' . $_FILES['receipt']['name'];

        move_uploaded_file($_FILES['receipt']['tmp_name'], $filePath);

        header('Location: /');
    }
}