<?php
require_once 'API.class.php';

class User 
{
	public $name;
	public $balance;
}

class DinnerAPI extends API
{
    public function __construct($request, $origin) {
        parent::__construct($request);
    }

    
	protected function example($args) {
		$user = new User();
		$user->name = "testname";
		$user->balance = 123;

		//return $user;
		return Array($this->file,$args);
	}
 }
?>
