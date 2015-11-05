<?php 
include('connect.php');

if ($_SERVER["REQUEST_METHOD"] == "POST"){
	//$response = "Hello";

	$phones = json_decode($_POST["activitiesArray"]);

	$orders = array();
	$o = 0;

	for ($i=3; $i < count($phones) ; $i++) { 		
		$orders[$o] = $phones[$i];		
		$o++;
	}

	$placed_order = implode(" ", $orders);   

	//$placed_order = "$placed_order"; 

	$sql0 = "SELECT id FROM customers WHERE email = '$phones[1]'";

	$firstSearch = $conn->query($sql0);	

	if ($firstSearch->num_rows > 0) {

		foreach ($firstSearch as $key) {
			$id = $key['id'];
		}
		$sql1 = "UPDATE customers SET phone = '$phones[2]' WHERE id = '$id'";
		$sql2 = "INSERT INTO orders(customer_order, customer_id) VALUES ('$placed_order.\r\n', '$id')";

		/*$conn->query($sql1);
		$conn->query($sql2);*/

		if ($conn->query($sql1) === TRUE && $conn->query($sql2) === TRUE){
			$response = "success";
			$conn->close();



			$the_email = strip_tags($phones[1]);
		    $the_message = $placed_order;		    

		    $formcontent="Order: \r\n $the_message ";		
			$recipient = "stephanwilliams1@gmail.com";
			$subject = "New Order From Website";
			$mailheader = "From: $the_email \r\n";

			mail($recipient, $subject, $formcontent, $mailheader);

			//email($phones[1], $placed_order);

			echo json_encode($response);
		} 
		else {
			$response = "fail";
			$conn->close();
			echo json_encode($response);				    
		}
	}
	else{
		$sql3 = "INSERT INTO customers (name, email, phone) VALUES ('$phones[0]', '$phones[1]', '$phones[2]')";

		if ($conn->query($sql3) === TRUE) {

			$sql4 = "SELECT id FROM customers WHERE email = '$phones[1]'";
	    	
	    	$result = $conn->query($sql4);	    	
    	
	    	if ($result->num_rows > 0){

	    		foreach ($result as $key) {
		    		$id2 = $key['id'];
		    	}
		    	
	    		$sql5 = "INSERT INTO orders(customer_order, customer_id) VALUES ('$placed_order.\r\n', '$id2')";

	    		if ($conn->query($sql5) === TRUE){
	    			$response = "success";
	    			$conn->close();
	    			
			    	$the_email = strip_tags($phones[1]);
				    $the_message = $placed_order;		    

				    $formcontent="Order: \r\n $the_message ";		
					$recipient = "stephanwilliams1@gmail.com";
					$subject = "New Order From Website";
					$mailheader = "From: $the_email \r\n";

					mail($recipient, $subject, $formcontent, $mailheader);

	    			echo json_encode($response);
	    		} 
	    		else {
	    			$response = "fail";
	    			$conn->close();
	    			echo json_encode($response);				    
				}
	    	}
	    	
		}
	}
}
	//echo json_encode($response);
//}