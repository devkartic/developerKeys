<?php
/*
Question: What is reverse routing in Laravel?
Answer :
    Laravel reverse routing is generating URL's based on route declarations. Reverse routing makes
    your application so much more flexible. It defines a relationship between links and Laravel routes.
    When a link is created by using names of existing routes, appropriate Uri's are created automatically by Laravel.
    Here is an example of reverse routing.

    // route declaration

    Route::get(‘login’, ‘users@login’);
    Using reverse routing we can create a link to it and pass in any parameters that we have defined.
    Optional parameters, if not supplied, are removed from the generated link.

    {{ HTML::link_to_action('users@login') }}
    It will automatically generate an Url like http://xyz.com/login in view.