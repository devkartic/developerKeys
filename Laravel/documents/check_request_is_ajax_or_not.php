<?php
/*
Question: How to check request is ajax or not ?
In Laravel, we can use $request->ajax() method to check request is ajax or not.
Example:
    public function saveData(Request $request)
    {
        if($request->ajax()){
            return "Request is of Ajax Type";
        }
        return "Request is of Http type";
    }