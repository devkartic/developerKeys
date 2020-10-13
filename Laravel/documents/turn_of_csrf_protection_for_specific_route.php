<?php
/*
Question: How to turn off CRSF protection for specific route in Laravel?
Answer :
To turn off CRSF protection in Laravel add following codes in “app/Http/Middleware/VerifyCsrfToken.php”

// add an array.txt of Routes to skip CSRF check
private $exceptUrls = ['controller/route1', 'controller/route2'];
// modify this function
    public function handle($request, Closure $next) {
// add this condition foreach($this->exceptUrls as $route) {
        if ($request->is($route)) {
        return $next($request);
        }
    }
    return parent::handle($request, $next);
    }