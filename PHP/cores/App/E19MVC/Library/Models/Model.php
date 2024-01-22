<?php

namespace App\E19MVC\Library\Models;

use AllowDynamicProperties;
use App\E19MVC\App;
use App\E19MVC\DB;

abstract class Model
{
    protected DB $db;
    public function __construct()
    {
        $this->db = App::db();
    }
}