<?php

namespace App\E20UnitTesting\Library\Models;

use AllowDynamicProperties;
use App\E20UnitTesting\App;
use App\E20UnitTesting\DB;

abstract class Model
{
    protected DB $db;
    public function __construct()
    {
        $this->db = App::db();
    }
}