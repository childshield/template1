<?php
  
  $to = 'sallana@uoguelph.ca';
    $from = $_POST['email']; // this is the sender's Email address
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $message = $name . " wrote the following on AI4Food Web:" . "\n\n" . $_POST['message'];    
    $headers = "From:" . $from;
    mail($to,$subject,$message,$headers);
    //echo "Mail Sent. Thank you " . $name . ", we will contact you shortly.";
    //header('Location: ../index.html#contact'); //to redirect to another page.

?>
