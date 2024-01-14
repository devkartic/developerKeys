<?php

namespace App\E15ExceptionAndTryCatchFinallyBlocks\Exception;

class CustomException extends \Exception
{
    protected $message = 'Missing billing information';
}