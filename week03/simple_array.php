<?php 

	//arrays
	$colors = array('red', 'blue', 'green', 'orange');

	$random = rand(0,3); //make a random color between 0 and size of our array


?>

<html>
	<head>
		<style>
			body{
				background-color: <?php echo $colors[ $random ]; ?>;

			}	
		</style>
	</head>
	<body>
		<?php //print_r($colors); //output the contents of our array ?>
		<?php foreach($colors as $color){ //iterate through our array outputting all our colors?>

				<h1> Color: <?php echo $color;?> </h1>

		<?php } ?>

	</body>
</html>