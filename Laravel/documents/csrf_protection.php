<?php

/*
 *  CSRF :

    Laravel makes it easy to protect your application from cross-site request forgery (CSRF) attacks.
    Cross-site request forgeries are a type of malicious exploit whereby unauthorized commands are
    performed on behalf of an authenticated user.

    Laravel automatically generates a CSRF "token" for each active user session managed by the
    application. This token is used to verify that the authenticated user is the one actually
    making the requests to the application.

    Anytime you define an HTML form in your application, you should include a hidden CSRF
    token field in the form so that the CSRF protection middleware can validate the request.
    You may use the @csrf Blade directive to generate the token field:


    // For Blade
    <form method="POST" action="/profile">
        @csrf
        ...
    </form>

    // For Ajax
    <meta name="csrf-token" content="{{ csrf_token() }}">

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });



    The VerifyCsrfToken middleware, which is included in the web middleware group, will
    automatically verify that the token in the request input matches the token stored in the session.

 */
