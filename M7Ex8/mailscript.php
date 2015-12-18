<?php

if($_POST['robots'] != '') {
    echo 'No spammers here!';
} else {
    // Process the form
}

            $to = 'general_enquiries@websiteinfotest.ninja';
            $subject = 'General Enq  ';
            $message  = 'From: ' . $_POST['name'] . "\n";
            $message .= 'Email from: ' . $_POST['email'] . "\n";
            $message .= "Message:\n" . $_POST['Message'] . "\n\n";
			$headers .= 'Cc: admin@websiteinfotest.ninja';
            mail($to, $subject, $message, $headers);


mail ($email, $subject, $message, $from);

header('Location: http://www.artworkpastels.com/websiteinfotest.ninja/thank-you.html');
exit();

?>