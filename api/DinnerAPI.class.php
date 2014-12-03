<?php
require_once 'API.class.php';
require_once 'Model.class.php';

class DinnerAPI extends API
{
	private $users;

    public function __construct($request, $origin) {
        parent::__construct($request);
    
		$this->users = json_decode(file_get_contents(
			'./../db/users.json', true),true);
	}

	/**
	 * Test function for checking input variables
 	 */    
	protected function vardump($args) {
		return Array(
			"Args" => $this->args,
			"Method" => $this->method,
			"Endpoint" => $this->endpoint,
			"Verb" => $this->verb,
			"Body" => $this->body
		);
	}
	
	protected function users($args) {
		if($this->method == 'GET'){
			return $this->users;	
		}			
	}

	protected function user($args) {
		if($this->method == 'GET'){
			$usr_str = json_decode(
				file_get_contents('./../db/users/'.$this->verb.'.json', true));
			if($usr_str == NULL){
				return "Error: Unable to find user ".$this->verb;			
			}
			$usr = new User($usr_str);
			return $usr;
		}
		else if($this->method == 'PUT'){
			$name = $this->body->{'name'};
			if(!in_array($name,$this->users)){
				return "Error: Unable to find user ".$name;		
			}

			$err = file_put_contents('./../db/users/'.$name.'.json', 
								"lol"/*json_encode($this->body)*/, FILE_USE_INCLUDE_PATH | LOCK_EX);
			if($err == false){
				return 'Error: Something horrible happend';			
			}

			return $this->body;
		}
	}
		
 }
?>
