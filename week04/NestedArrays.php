<?php 
	
	$snacks = array(

					"Junk Food"=> array("Burger", "Pixie Sticks", "Chips"),
					"Healthy"=> array("Nuts", "Fruit", "yogurt"),
					"On the Go"=> array("gogurt", "string cheese", "lunchables"),
					"Other Snack",
					"One More Snack",
					"My Favorite Snack"
					);
	
	//print_r($snacks);

	foreach($snacks as $snack){

		//echo $snack;
		//print_r($snack);

		if(is_array($snack)==true){

			foreach($snack as $s){

				echo '<p>'.$s.'</p>';

			}//loop2

		}else{ 
			echo '<h1>'.$snack.'</h1>';
		}//endif

	}//loop1
?>
