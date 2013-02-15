<?php 
	
	//php variables are created using $yourvarname

	$math = 20.222222222222; //float
	$num = 2; //in
	$___ = "Hello World $math";//string
	$char = '$\ / ; $math'; //characters
	$concat = "This is one string: ".$___."  ".$math; //adding strings/vars together using .

?>

<html>
	<head>
		<title>My First Php Page</title>

	</head>

	<body>
		<p id='stuff'><?php echo $___ ?></p>
		<p><?php echo $char; ?></p><!-- end p -->

	</body>

</html>