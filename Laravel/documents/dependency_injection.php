<?php
/*
Question: What is dependency injection in Laravel ?
Answer :
    In software engineering, dependency injection is a technique whereby one object supplies the dependencies of another object.
    A dependency is an object that can be used (a service). An injection is the passing of a dependency to a dependent
    object (a client) that would use it. The service is made part of the client’s state.[1] Passing the service to the client,
    rather than allowing a client to build or find the service, is the fundamental requirement of the pattern.
    https://en.wikipedia.org/wiki/Dependency_injection
    You can do dependency injection via Constructor, setter and property injection.