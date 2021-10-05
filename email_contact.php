<?php

    $tableList = "";                        // set variable as empty string
    foreach($_POST as $key => $value)		// loops through each name-value in the $_POST array
    {
        $tableList .= "<tr>";				// formats the beginning of the row
        $tableList .= "<td>$key</td>";		// displays the name of the name:value pair from the form
        $tableList .= "<td>$value</td>";	// displays the value of the name:value pair from the form
        $tableList .= "</tr>";				// ends the current row
    }
    $to = "jeremybrannen@gmail.com";
    $subject = "You have a contact waiting for your response!";
    $message = "Hello, <br> You have a new contact submission on " . submittalDate() . ".  All the contact's information is as follows: <br>" . $tableList . "<br> Please respond to this request as soon as possible.  Thank you. <br><br> Regards, <br> Dev Response Team";
    
    $headers = "From: jeremybrannen@jeremybrannen.info" . "\r\n";   // email address from host server

    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";    // formats for http

    mail($to,$subject,$message,$headers);   // send out email
  
?>