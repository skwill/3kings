<?php 

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
	$got = array();

	$phones = json_decode($_POST["activitiesArray"]);

	for ($i=0; $i < count($phones) ; $i++) { 
		echo $phones[$i]."\r\n";
		//$got[$i] = $phones[$i];
	}

	/*foreach ($phones as $phone) {
		# code...
		echo $phone."\n";
	}*/
	
	/*$sql = 'select * from plants WHERE category = "'.$category.'"';
	$result  = $conn->query($sql);	

	$response = array();

	$i = 0;

	foreach ($result as $plant) {
		$response[$i] = $plant;
		$i++;
	}

	echo json_encode($response);*/
}