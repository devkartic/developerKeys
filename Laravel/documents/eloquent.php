<?php
/*
Question: What are Laravel eloquent?
Answer :
    Laravel's Eloquent ORM is simple Active Record implementation for working with your database.
    Laravel provide many different ways to interact with your database, Eloquent is most notable of them.
    Each database table has a corresponding “Model” which is used to interact with that table.
    Models allow you to query for data in your tables, as well as insert new records into the table.

    Below is sample usage for querying and inserting new records in Database with Eloquent.


// Querying or finding records from products table where tag is 'new'
    $products= Product::where('tag','new');
// Inserting new record
    $product =new Product;
    $product->title="Iphone 7";
    $product->price="$700";
    $product->tag='iphone';
    $product->save();