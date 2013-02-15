<?php

	require('ivonaAPIClient_1and2.php'); //link to the ivona api connector

	$text=$_REQUEST['text']; //get text from our form

	// example command line execution for getting URL for single text
	$IvonaTTS = new IvonaTextToSpeech(); //init the text to speech class

	$data = $IvonaTTS->synthesize($text, "text/plain");
	error_log( "Received URL from IVONA \n" .$data); //output update to our error log

	$user = 'sample-user';
	$date = date("Md-y");
	if(!is_dir($date))mkdir($date); //check for a folder - if not there make folder
	$filepath=$date."/".$user; //set file path

	if(!is_dir($filepath))mkdir($filepath); // check for directories

	$filecount = count(glob($filepath . "/*")); //count files inside of current path

	$filepath.="/audio".$filecount.".mp3"; //make unique file name
	copy($data, $filepath);//copy data into new file

	$json = array( 'audio' => $filepath); 

	echo $_GET['callback']."(".json_encode($json).")"; //pass data back to javascript



?>