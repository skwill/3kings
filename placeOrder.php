<?php
    require 'connect.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        date_default_timezone_set('Etc/GMT+4');
        $datecreated = date( "Y-m-d H:i:s");
        $name = $_POST['name'];
        $email = $_POST['email'];       
        $contact = $_POST['contact'];
        $address = $_POST['address'];
        $message = $_POST['message'];
        $title = 'Order From '.$name;

        $sql = "INSERT INTO bolt_product_orders (datecreated, title, name, email, address, phone, product_order)
                VALUES ('".$datecreated."', '".$title."', '".$name."', '".$email."', '".$address."', '".$contact."', '".$message."')";

        /*$sql = "select * from subscribers where subscribers.email = '".$the_email."'";*/
        if($result  = $conn->query($sql)){
            require 'Mailer/PHPMailerAutoload.php';
 
            $mail = new PHPMailer;
             
            $mail->isSMTP();                                      // Set mailer to use SMTP
            $mail->Host = 'smtpout.secureserver.net';                       // Specify main and backup server
            $mail->SMTPAuth = true;                               // Enable SMTP authentication
            $mail->Username = 'info@croissancett.com';                   // SMTP username
            $mail->Password = 'Ch@ngeme123';              // SMTP password
            $mail->SMTPSecure = 'ssl';                            // Enable encryption, 'ssl' also accepted
            $mail->Port = 465;                                    //Set the SMTP port number - 587 for authenticated TLS
            $mail->setFrom('info@croissancett.com', 'Croissance Hair and Skin Care');     //Set who the message is to be sent from
            $mail->addAddress('stephanwilliams1@gmail.com', 'Stephan Williams');  // Add a recipient
            /*$mail->addReplyTo('labnol@gmail.com', 'First Last');  //Set an alternative reply-to address
            $mail->addAddress('josh@example.net', 'Josh Adams');  // Add a recipient
            $mail->addAddress('ellen@example.com');               // Name is optional
            $mail->addCC('cc@example.com');
            $mail->addBCC('bcc@example.com');*/
            $mail->WordWrap = 50;                                 // Set word wrap to 50 characters
            /*$mail->addAttachment('/usr/labnol/file.doc');         // Add attachments
            $mail->addAttachment('/images/image.jpg', 'new.jpg'); // Optional name*/
            $mail->isHTML(true);                                  // Set email format to HTML
             
            $mail->Subject = 'Order From croissancett.com';
            $mail->Body    = 'You have one new order. Please check your orders.';
            $mail->AltBody = 'You have one new order. Please check your orders.';
             
            //Read an HTML message body from an external file, convert referenced images to embedded,
            //convert HTML into a basic plain-text alternative body
            //$mail->msgHTML(file_get_contents('contents.html'), dirname(__FILE__));
             
            if(!$mail->send()) {
                $response['status'] = 'error';
                $response['message'] = 'A communication error occured';
               exit;
            }else{
                $response['status'] = 'success';
                $response['message'] = 'Your message has been successfully sent.';
            }           

            echo json_encode($response);
            
        }
        /*$recipient1 = "stephanwilliams1@gmail.com";

        $formcontent=" From: $name \n $contact \n $address \n \n Message: $message ";

        $subject = "Contact From Website";
        $mailheader = "From: $email \r\n";

        if(mail($recipient1, $subject, $formcontent, $mailheader)){
            $response['status'] = 'success';
            $response['message'] = 'Your message has been successfully sent.';
        } 
        echo json_encode($response);*/

}