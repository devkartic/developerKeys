<?php
/*
Question: How to use Custom table in Laravel Modal ?

Answer :
    You can use custom table in Laravel by overriding protected $table property of Eloquent.

    Below is sample uses

    class User extends Eloquent{
        `protected $table="my_user_table";
    }