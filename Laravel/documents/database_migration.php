<?php
/*
Question: What is database migration. How to create migration via artisan ?
Answer :
    Migrations are like version control for your database, that’s allow your team to easily modify and share the application’s
    database schema. Migrations are typically paired with Laravel’s schema builder to easily build your application’s database schema.

    Use below commands to create migration data via artisan.

    // creating Migration
    php artisan make:migration create_users_table