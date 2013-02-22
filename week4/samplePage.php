<?php  $snacks = array(

					"Junk Food"=> array("Burger", "Pixie Sticks", "Chips"),
					"Healthy Food"=> array("Nuts", "Fruit", "yogurt"),
					"On the Go"=> array("gogurt", "string cheese", "lunchables")

					);
?>

<!Doctype html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>My Awesome Sample Page</title>
		<style>
			body{  width: 100%; height: 100%; margin: 0 ; padding: 0;}
			#main{ width: 500px; margin: 0 auto; padding: 20px; background-color: whitesmoke; min-height: 800px; }
			#main article{ padding: 10px; margin: 20px 0; background-color: lightblue; }
			.Junk-Food {  background-color: orange !important;  }
			.Healthy-Food{ background-color: green !important; }
			.On-the-Go{background-color: gray !important;}

			p.Pixie-Sticks{ font-size: 8em; color: red;}
			
		</style>
	</head>
	<body>
		<section id = 'main'>
			<?php foreach($snacks as $title => $item){ 
					$newTitle = str_replace(' ', '-', $title);
			?>

				<article class = "<?php echo $newTitle; ?>">
				<h4><?php echo $title; ?></h4>

				<?php foreach($item as $i) {
					$nice = str_replace(' ', '-', $i);

					?>

					<p class =" desc <?php echo $nice; ?> "><?php echo $i; ?></p>

				<?php } ?>
				</article>
			<?php } //endforeach?>


		</section>
	</body>
</html>

