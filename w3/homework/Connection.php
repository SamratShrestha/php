<?php
class Connection{
	public static function make($config){
		try{
			return new mysqli($config['connection'],$config['username'],$config['password'],$config['name']);
		}catch(Exception $e){
			echo "Database error ".$e->getMessage();
		}
	}
}
