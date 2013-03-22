<?php 
	
	$m = new MongoClient(); //make a connection
	$db = $m -> sample; //use a particular db
	$collection = $db -> colors; //select a collection (similar to a table)
	
	//create a document for the database
	$document = array( "name" => "Red", "value"=> "#ff0000");
	
	//insert document into database
	$collection->insert($document);
	
	//do it again with different document information
	$document = array("name"=> "Blue", "value"=>"#0000ff");
	
	//insert document into database
	$collection->insert($document);
	
	//do it again with different document information
	$document = array("name"=> "Green", "value"=>"#00ff00");
	
	//insert document into database
	$collection->insert($document);
	
	
	$cursor = $collection->find();
	
	foreach($cursor as $doc){
		//echo "Name: ".$doc['name']."  Value: ".$doc['value'];
		//echo "<p>".$doc['_id']."</p>" //sample to find document id
	?>
	
		<p style="color:<?php echo $doc['value']; ?>;"><?php  echo $doc['name'];?></p>
	
	<?php
		
	}
	
	echo "Success";
	
?>