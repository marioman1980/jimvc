<?php

class Example_root_Model extends Model_Core {

	public $string;

	public function __construct(){
		$this->string = "This string is defined in the 'Example_root' model 
						(although you're more likely to be getting data from a database)
						and passed to the view via the controller.";
	}

	public function get_string() {
		return $this->string;
	}
}