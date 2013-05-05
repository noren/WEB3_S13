<?php 
	
	$snacks = array(

					"Junk Food"=> array( "Burger" => array( "Beef", 
															"Grease", 
															"Cheese", 
															"Lettuce" ), 
										"Pixie Sticks", 
										"Chips"),

					"Healthy"=> array("Nuts", 
									  "Fruit", 
									  "yogurt"),

					"On the Go"=> array("gogurt", 
										"string cheese", 
										"lunchables"),
					"Other Snack",
					"One More Snack",
					"My Favorite Snack"
					);
	
	foreach($snacks as $title => $snack){

		if(is_array($snack)==true){

			echo '<h1>'.$title.'</h1>';

			foreach($snack as $snackname => $s){

				if(is_array($s)){

					echo '<p>'.$snackname.'<p>';
					echo '<ul>';
					foreach($s as $ingredient){

						echo '<li>'.$ingredient.'</li>';
					}//loop3
					echo '</ul>';

				}else{

					echo '<p>'.$s.'</p>';
				}//endif $s

			}//loop2

		}else{ 
			echo '<h2>'.$snack.'</h2>';
		}//endif

	}//loop1
?>
