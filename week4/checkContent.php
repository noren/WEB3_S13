<?php 

	$array = array(   
					"Panda bear"=>array("Black", "white","Lazy", "Bamboo eater"),
					"Polar bear"=>array("White", "Mean", "Drinks Coca-cola"),
					"Grizzly bear"=>array("Brown", "Evil", "Giant", "Likes Campfood"),
					"Teddy bear"=>array("Creepy")
					);
	foreach($array as $title => $item){ 

		if($title == "Polar bear"){ ?>

		<h4><?php echo $title; ?></h4>
		<p>Boy don't we love polar bears</p>

		<?php }else { ?>

			<p>Nothing</p>

	<?php	} //end if 

		} //end for each 

	//output one array
	foreach($array["Panda bear"]as $panda){

		echo $panda.'<br>';
	}

	//output all arrays
	foreach($array as $title => $item){

		echo '<h1>'.$title.'</h1>';

		foreach($item as $i){

			echo '<p>'.$i.'</p>';
		}

	}





