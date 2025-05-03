<?php
	/**
	* Requires error_codes.php
	* 
	*/
	function _GET_(string $key)
	{
		$param = NULL;
		
		if(array_key_exists($key,$_GET))
			$param = $_GET[$key];
		else die("Bad Request. Missing $key");
		
		return $param;
	}
	function _POST_(string $key)
	{
		$param = NULL;
		
		if(array_key_exists($key,$_POST))
			$param = $_POST[$key];
		else die("Bad Request. Missing $key");
		
		return $param;
	}
?>