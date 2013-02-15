<?php 
	//complex associative array sample

	$week = array(
					'Monday' => array(
								'10am'=> array('Breakfast'=> array('eggs',
																   'bacon',
																   'toast',
																   'homefries')
											   ),
								'11am'=>'Nap',
								'12pm'=>'Internet Memes'

								),
					'Tuesday' => array(
								'10am'=>'Breakfast',
								'11am'=>'Nap',
								'12pm'=>'Internet Memes'
								),
					'Wednesday' =>array(
								'10am'=>'Breakfast',
								'11am'=>'Nap',
								'12pm'=>'Internet Memes'
								),
					'Thursday' =>array(
								'10am'=>'Breakfast',
								'11am'=>'Nap',
								'12pm'=>'Internet Memes'
								),
					'Friday' =>array(
								'10am'=>'Breakfast',
								'11am'=>'Nap',
								'12pm'=>'Internet Memes'
								),
					'Saturday' =>array(
								'10am'=>'Breakfast',
								'11am'=>'Nap',
								'12pm'=>'Internet Memes'
								),
					'Sunday'=> array(
								'10am'=>'Breakfast',
								'11am'=>'Nap',
								'12pm'=>'Internet Memes'
								)
				);	



	print_r($week);

	echo '<br><br>';

	print_r( $week['Monday']['10am']);
	echo '<br>';

	foreach($week['Monday']['10am']['Breakfast'] as $item){

		echo $item."<br>";

	}




