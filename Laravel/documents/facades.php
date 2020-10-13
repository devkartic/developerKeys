<?php
/*
Question: Explain Facades in Laravel ?
Answer :
    Laravel Facades provides a static like an interface to classes that are available
    in the application’s service container. Laravel self-ships with many facades which provide access
    to almost all features of Laravel ’s. Laravel facades serve as “static proxies” to
    underlying classes in the service container and provide benefits of a terse, expressive syntax
    while maintaining more testability and flexibility than traditional static methods of classes.
    All of Laravel’s facades are defined in the Illuminate\Support\Facades namespace.
    You can easily access a facade like so:

    use Illuminate\Support\Facades\Cache;

    Route::get('/cache', function () {
        return Cache::get('key');
    });