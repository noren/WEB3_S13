<?php 
	
	$m = new MongoClient();
	$db = $m -> test;	
	$col = $db -> col;
	
	
	$name = $_POST['name'];
	
	error_log($name);
	
	$filename = 'test.txt';
	
	$obj = array('name'=>$_POST['name']);
	
	$col->insert($obj);
	
?>