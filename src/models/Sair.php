<?php

namespace src\models;

use \core\Model;
use core\Database;
use PDO;

class Sair extends Model
{

    public function sair()
    {
        session_destroy();
    }
}
