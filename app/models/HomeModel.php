<?php

class HomeModel extends Model{
	
	public function get($name, $adj){
		return 'Hello, ' . $name . '. You are ' . $adj . '!' ;
	}
}