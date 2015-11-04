<?php 
include('connect.php'); 
if ($_SERVER["REQUEST_METHOD"] == "POST"){

	$phones = json_decode($_POST["activitiesArray"]);

	$orders = array();
	$o = 0;

	for ($i=3; $i < count($phones) ; $i++) { 		
		$orders[$o] = $phones[$i];		
		$o++;
	}

	$placed_order = implode(" ", $orders);   

	$placed_order = "$placed_order"; 

	$sql0 = "SELECT id FROM customers WHERE email = '$phones[1]'";

	$firstSearch = $conn->query($sql0);
	var_dump($firstSearch);

	if ($firstSearch->num_rows > 0) {
		foreach ($firstSearch as $key) {
			$id = $key['id'];
		}
		$sql1 = "UPDATE customers SET phone = '$phones[2]' WHERE id = '$id'";
		$sql2 = "INSERT INTO orders(customer_order, customer_id) VALUES ('$placed_order.\r\n', '$id')";

		$conn->query($sql1);
		$conn->query($sql2);
	}
	else{
		$sql3 = "INSERT INTO customers (name, email, phone) VALUES ('$phones[0]', '$phones[1]', '$phones[2]')";

		if ($conn->query($sql3) === TRUE) {

			$sql3 = "SELECT id FROM customers WHERE email = '$phones[1]'";
	    	
	    	$result = $conn->query($sql3);	    	
    	
	    	if (!empty($result)){

	    		foreach ($result as $key) {
		    		$id2 = $key['id'];
		    	}
		    	
	    		$sql4 = "INSERT INTO orders(customer_order, customer_id) VALUES ('$placed_order.\r\n', '$id2')";

	    		if ($conn->query($sql4) === TRUE){
	    			$conn->close();
	    		} 
	    		else {
				    $conn->close();
				}
	    	}
	    	
		}
	}
}
	//echo json_encode($response);
//}