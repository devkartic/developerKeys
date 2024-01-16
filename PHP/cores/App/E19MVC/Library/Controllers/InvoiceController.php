<?php

namespace App\E19MVC\Library\Controllers;

use App\E19MVC\Library\View;

class InvoiceController
{
    public function index()
    {
        return View::make('invoices/index');
    }
    public function create()
    {
        return View::make('invoices/create');
    }
    public function store()
    {
        var_dump($_POST);
    }
}