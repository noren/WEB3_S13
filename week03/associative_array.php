<?php 
	//associative array
	//key => value
	$array = array('dog-1' => 'Finn', 
				   'dog-2' => 'Walter',
				   'dog-3' => 'Gus',
				   'dog-4' => 'Snoopy',
				   'cat-14'=> 'jingles'	
		);

?>

<html>
	<head>
	</head>
	<body>

		<?php 

			print_r($array); //print out our array

			echo $array['dog-1']; //print out one item from our array  using the key

			echo '<br/><br/><br/>';// don't use these

			foreach($array as $key=>$value){ //iterate through our array printing keys and values

				echo $key.":  ".$value."<br>";


			}

		?>

	</body>
</html>