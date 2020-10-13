<?php
/*
Question: What are named routes in Laravel ?
Answer :
    Named routing is another amazing feature of Laravel framework. Named routes allow referring to routes when generating redirects or Urls more comfortably.
    You can specify named routes by chaining the name method onto the route definition:

    Route::get('user/profile', function () {
        //
    })->name('profile');

    You can specify route names for controller actions:

    Route::get('user/profile', 'UserController@showProfile')->name('profile');

    Once you have assigned a name to your routes, you may use the route's name when generating URLs or redirects via the
    global route function:

    // Generating URLs...
    $url = route('profile');
    // Generating Redirects...
    return redirect()->route('profile')