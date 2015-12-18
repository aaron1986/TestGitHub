<?php
  $machine = $_POST['myrealname'];
    if ($machine != "")
    { echo 'naff off spammer';
        exit(); //if a spambot filled out the "machine"
                //field, we don't proceed
    }
        else{
 
 
    if (isset($_POST['Submit']) && $_POST['name'] != "") {
		
		$th_url= "http://www.artworkpastels.com/websiteinfotest.ninja/thank-you.html";   // modify to page redirect after mail succsessfully sent
 
        if ($_POST['name'] != "") {
            $_POST['name'] = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
            if ($_POST['name'] == "") {
                $errors .= 'Please enter a valid name.<br/><br/>';
            }
        } else {
            $errors .= 'Please enter your name.<br/>';
        }
 
        if ($_POST['email'] != "") {
            $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $errors .= "$email is <strong>NOT</strong> a valid email address.<br/><br/>";
            }
        } else {
            $errors .= 'Please enter your email address.<br/>';
        }
		
	/*	Validating  web address in form field  **********************************************     */
		
		   
      
        if ($_POST['Message'] != "") {
            $_POST['Message'] = filter_var($_POST['Message'], FILTER_SANITIZE_STRING);
            if ($_POST['Message'] == "") {
                $errors .= 'Please enter a message to send.<br/>';
            }
        } else {
            $errors .= 'Please enter a message to send.<br/>';
        }
 
        if (!$errors) {
            $to = 'general_enquiries@websiteinfotest.ninja';
            $subject = 'New Mail from  ' . $_POST['email'];
            $message  = 'From: ' . $_POST['name'] . "\n";
            $message .= 'Email from: ' . $_POST['email'] . "\n";
            $message .= "Message:\n" . $_POST['Message'] . "\n\n";
			$headers .= 'Cc: admin@websiteinfotest.ninja';
            mail($to, $subject, $message, $headers);
 
          
    header("Location: $th_url");
			
        } else {
            echo '<div style="color: red">' . $errors . '<br/></div>';
        }
    }
		}
?>