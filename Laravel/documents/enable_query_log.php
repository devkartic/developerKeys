<?php
/*
Question: How to enable query log in Laravel ?
Answer :
    Use the enableQueryLog method to enable query log in Laravel
    DB::connection()->enableQueryLog();
    You can get array.txt of the executed queries by using getQueryLog method:
    $queries = DB::getQueryLog();