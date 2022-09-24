<?php
namespace core;

use \core\Database;

class Model {

    protected static $con;
    
    public function __construct() {
        $this->con = Database::getInstance();
    }
   
}