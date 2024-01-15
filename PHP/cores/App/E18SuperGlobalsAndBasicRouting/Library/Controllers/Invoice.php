<?php

namespace App\E18SuperGlobalsAndBasicRouting\Library\Controllers;

class Invoice
{
    public function index()
    {
        return 'Invoices' . PHP_EOL;
    }
    public function create()
    {
        return '<form action="/invoices/create" method="post"><label>Amount </label><input type="text" name="amount"/></form>';
    }
    public function store()
    {
        var_dump($_POST);
    }
}