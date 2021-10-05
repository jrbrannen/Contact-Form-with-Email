<?php

    include "email_contact.php";    // php file to send an email to the point of contact
    include "email_response.php";   // php file to send an email response to the form submittal email address

    function submittalDate(){               // gets the submittal date
        $date = date("m/d/Y");              // assign formatted date in $date variable
        return $date;                       // return $date varible
    }// end submittalDate()

    function formatResponse($inReason){ // formats an appropiate response based of off the name:value input
        
        if($inReason == "resume"){
            $response = "my resume";
        }
        if($inReason == "references"){
            $response = "my references";
        }
        if($inReason == "GitHub"){
            $response = "a GitHub url";
        }
        if($inReason == "interview"){
            $response = "an interview";
        }
        if($inReason == "other"){
            $response = "other";
        }
        return $response;
    } // end formatResponse

?>

<!DOCTYPE html>
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>WDV341 Basic Form Handler Example</title>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    
    <!-- WDV341 Intro PHP Unit 5 
          Project: Contact Form with Email
          Jeremy Brannen -->
        
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap');
        body{
            font-family: 'Open Sans', sans-serif;
        }
        a:hover{
          color: purple;
          text-decoration: none;
        }

    </style>

    </head>


    <body class="container-fluid">
    
        <h3 class="text-center">Thank you!  Your request is being processed.</h3>

        <div class= "jumbotron col-md-4 mx-auto border border-dark rounded-lg m-6 p-4" style="background-color:cornsilk">
            
            <p>
                Dear <?php echo $_POST["first_name"] , ","; ?>
            </p>

            <p>
                Thank you for your interest and for contacting me.  You should recieve a confirmation email at:</br>
                <?php echo $_POST["email_address"]; ?></br>
                Your request indicates your reason for contacting me is for <?php echo formatResponse($_POST["reason"]); ?>, with the following comments: </br>
                <strong><?php echo $_POST["comments"]; ?></strong>  
                
            </p>

            <p>
                You should expect an email response or phone call from me reguarding your request within the next 24 hours.
            </p>

        
        </div>

        <footer class="text-center m-4">

            <p>
                <a target="_blank"href="https://github.com/jrbrannen/Demonstrate-Input-Form-PHP.git">GitHub Repo Link</a>
            </p>

            <p>
                <a href="../wdv341.php">PHP Homework Page</a>
            </p>

        </footer>

    </body>

</html>