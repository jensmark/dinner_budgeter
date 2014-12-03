<?php

abstract class Model
{
	public function __construct($class, $json_data) {
        foreach($json_data as $key => $val) {
            if(property_exists($class,$key)) {
                $this->$key = $val;
            }
        }
    }
}

class User extends Model
{	
	public $name;
	public $balance;

	public function __construct($json_data) {
        parent::__construct(__CLASS__,$json_data);
    }
}

?>
