<?php 
	/*
	//
	// Welcome to PHP 
	*/


	//comment or /* comment */

	//php variables are created using $ ex- $foo


	$math = 20.222222222222; //float
	$num = 2; //int
	$___ = "Hello World $math";//string
	$char = '$\ / ; $math'; //characters
	$concat = "This is one string: ".$___."  ".$math; //adding strings/vars together using .

?>

<html>
	<head>
		<title>My First Php Page</title>

	</head>

	<body>
		<!-- Using Echo to output content -->
		<?php  //start and end php inside of html?>
		<p id='stuff'><?php echo $___ ?></p>
		<p><?php echo $char; ?></p>

	</body>

</html>