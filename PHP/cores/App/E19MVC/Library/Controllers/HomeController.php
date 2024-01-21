<?php

namespace App\E19MVC\Library\Controllers;

use App\E19MVC\App;
use App\E19MVC\DB;
use App\E19MVC\Library\View;
use PDO;
class HomeController
{
    public function index(): View
    {
        try {
            $db = App::db();
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
        } catch (\Exception $exception) {
            echo $exception->getMessage() . '<br/>';
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