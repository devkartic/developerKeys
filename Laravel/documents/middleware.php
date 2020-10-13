<?php
/*
Question: Explain Laravel’s Middleware ?
Answer :
    As the name suggests, Middleware acts as a middleman between request and response. It is a type of filtering mechanism.
    For example, Laravel includes a middleware that verifies whether the user of the application is authenticated or not.
    If the user is authenticated, he will be redirected to the home page otherwise, he will be redirected to the login page.

    There are two types of Middleware in Laravel.
    Global Middleware: will run on every HTTP request of the application.
    Route Middleware: will be assigned to a specific route.
    Read more about Laravel middlewares