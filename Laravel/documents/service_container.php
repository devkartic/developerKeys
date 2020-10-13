<?php
/*
Question: Explain Laravel’s service container ?
Answer :
    One of the most powerful feature of Laravel is its Service Container. It is a powerful tool for
    resolving class dependencies and performing dependency injection in Laravel.

    Dependency injection is a fancy phrase that essentially means class dependencies are “injected” into
    the class via the constructor or, in some cases, “setter” methods.

*/


    namespace App\Http\Controllers;

    use App\Http\Controllers\Controller;
    use App\Repositories\UserRepository;
    use App\User;

    class UserController extends Controller
    {
        /**
         * The user repository implementation.
         *
         * @var UserRepository
         */
        protected $users;

        /**
         * Create a new controller instance.
         *
         * @param  UserRepository  $users
         * @return void
         */
        public function __construct(UserRepository $users)
        {
            $this->users = $users;
        }

        /**
         * Show the profile for the given user.
         *
         * @param  int  $id
         * @return Response
         */
        public function show($id)
        {
            $user = $this->users->find($id);

            return view('user.profile', ['user' => $user]);
        }
    }

    /*
     *
    In this example, the UserController needs to retrieve users from a data source. So, we will inject a
    service that is able to retrieve users. In this context, our UserRepository most likely uses
    Eloquent to retrieve user information from the database. However, since the repository is injected,
    we are able to easily swap it out with another implementation. We are also able to easily "mock",
    or create a dummy implementation of the UserRepository when testing our application.

    A deep understanding of the Laravel service container is essential to building a powerful,
    large application, as well as for contributing to the Laravel core itself.

     */