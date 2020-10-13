<?php
/*
Question: What is the benefits using to laravel ?
Answer :
a. Authorization Technique:
    PHP framework:Laravel makes the implementation of authentication techniques very simple. Almost everything is configured
    extraordinarily. Laravel also provides a simple way to organize authorization logic and control access to resources.

b. Object-Oriented Libraries:
    One of the top reasons which make Laravel the best PHP framework is it has Object
    Oriented libraries and many other pre-installed ones, which are not found in any other popular PHP frameworks.
    One of the pre-installed libraries is the Authentication library. Although it is easy to implement,
    it has many advanced features, such as checking active users, Bcrypt hashing,  password reset,
    CSRF (Cross-site Request Forgery) protection, and encryption. PHP framework:

c. Artisan:
    Laravel offers a build in a tool named as Artisan. A developer has to usually interact with the Laravel
    framework using a command line that creates and handles the Laravel project environment. Laravel provides a built-in
    tool for command-line called Artisan. This tool allows us to perform the majority of those repetitive and tedious
    programming tasks that most of the developers avoid performing manually.

d. MVC Support:
    Another reason which makes Laravel the best PHP framework is it supports MVC Architecture like Symfony,
    ensuring clarity between logic and presentation. MVC  helps in improving the performance, allows better documentation,
    and has multiple built-in functionalities. Here’s how the MVC works for Laravel.Related: Symfony Vs Laravel: What
    to choose?Laravel MVC model

e. Security:
    While developing an application everyone has to use some of the other ways too make the application secure.
    Laravel takes care of the security within its framework. It uses salted and hashed password, which means that the password
    would never save as the plain text in the database. It uses Bcrypt hashing algorithm for generating an encrypted representation
    of a password. Laravel uses prepared SQL statements which make injection attacks unimaginable. Along with this, Laravel
    provides a simple way to escape user input to avoid user injection of <script> tag. Here are the security features that
    Laravel offers:Laravel SecurityAlso Read: Can We Build Enterprise Apps With Laravel?

f. Database Migration:
    One pain point for developers is to keep the database in sync between development machines.
    With Laravel database migrations, it is extremely easy. After the long work hours, you may have made a lot of changes
    to the database and, in our option, MySQL Workbench is not a great way to sync databases between my development machines.
    Enter Migrations. As long as you keep all of the database work in migrations and seeds, you can easily migrate the changes
    into any other development machine you have. This is yet another reason which makes Laravel the best PHP framework.
    Read More: Laravel Spark 6.0 is Now AvailableDatabase migration in laravel

g. Great Tutorials (Laracasts):
    You or your developers need to learn more in order to deliver more. Unlike
    others (Codeigniter, Yii, CakePHP etc.) Laravel offers Laracasts which features a mix of free and paid video
    tutorials that show you how to use Laravel. The videos are all made by Jeffery Way, an expert and experienced instructor.
    He seems to have his finger on the pulse of the essentials and offers clear and concise instructions. The production
    quality is high, and the lessons are well-thought out and meaningful.Related: Codeigniter Vs CakePHP Vs Yii Vs Laravel

h. Blade Templating Engine:
    The Blade templating engine of Laravel is very intuitive and helps to work with the typical PHP/HTML
    spaghetti so much better, that’s it one of the best features of the framework. If you ever have had to
    chop up an if statement with HTML inside of it, you know exactly what I mean. But with blade, it’s almost
    effortless. Here’s how it goes:blade templating engine in laravel- best PHP framework9) Responsible InterfaceResponsible
    Interface is a new feature added in the Laravel with the release of Laravel 5.5 in August 2017. It is a class which is
    used to implement the interface which can be returned by using the controller method. After that, the router is
    going to check for the instance of Responsible when preparing the response from “Illuminate\Routing\Router”. In the
    image below we will show an example of non-implementation of Responsible interface:The image below will show the
    code for what a class looks like after implementing Responsible Interface:In the above example, users can respond with
    JSON automatically if the request has been made through AJAX by default, it would redirect to the route “Songs.show”.
    Read More: Top 10 Web Application Development Trends In 201910) Automatic Package DiscoveryPreviously in the earlier
    versions of Laravel, it was not easy to install packages. However, in Laravel 5.5
    a new feature called Automatic Package Discovery detects the packages automatically which users want to install.
    Meaning that now users don’t have to setup any aliases or providers from installing new packages in Laravel.
    Also, Laravel 5.5 allows developers to disable this feature for specific packages.
    Read More: Other New Features in Laravel 5.5




