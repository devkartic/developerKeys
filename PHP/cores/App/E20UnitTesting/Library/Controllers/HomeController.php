<?php

namespace App\E20UnitTesting\Library\Controllers;

use App\E20UnitTesting\App;
use App\E20UnitTesting\DB;
use App\E20UnitTesting\Library\Models\Invoice;
use App\E20UnitTesting\Library\Models\SignUp;
use App\E20UnitTesting\Library\Models\User;
use App\E20UnitTesting\Library\View;
use PDO;

class HomeController
{
    public function index(): View
    {
        $db = App::db();

        $email = 'test1@gmail.com';
        $name = 'Test';
        $amount = random_int(20, 100);

        $userModel = new User();
        $invoiceModel = new Invoice();

        $invoiceId = (new SignUp($userModel, $invoiceModel))->register(
            [
                'email' => $email,
                'name' => $name,
            ],
            [
                'amount' => $amount,
            ]
        );

        return View::make('index', ['invoice' => $invoiceModel->find($invoiceId)]);
    }

    public function upload()
    {
        $filePath = STORAGE_PATH . '/' . $_FILES['receipt']['name'];

        move_uploaded_file($_FILES['receipt']['tmp_name'], $filePath);

        header('Location: /');
    }
}