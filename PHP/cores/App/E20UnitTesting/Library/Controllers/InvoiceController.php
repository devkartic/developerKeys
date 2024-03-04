<?php

namespace App\E20UnitTesting\Library\Controllers;

use App\E20UnitTesting\Library\View;

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