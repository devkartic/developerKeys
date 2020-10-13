<?php
/*
Question: What are service providers in Laravel ?
Answer :
    Service providers are the central place of all Laravel application bootstrapping. Your own application,
    as well as all of Laravel's core services are bootstrapped via service providers.

    But, what do we mean by "bootstrapped"? In general, we mean registering things, including registering
    service container bindings, event listeners, middleware, and even routes. Service providers are the central
    place to configure your application.

    Service providers are responsible for bootstrapping all of the framework's various components,
    such as the database, queue, validation, and routing components. Since they bootstrap and configure
    every feature offered by the framework, service providers are the most important aspect of the entire
    Laravel bootstrap process.