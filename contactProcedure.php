<?php
$mailDest = "ali.terro@etu.unilim.fr";
if (isset($_POST['contactContact'])) {
    $nom = $_POST['nomContact'];
    $addresse = $_POST['mailContact'];
    $description = $_POST['descriptionContact'];

    $subject = "Description pour contact";
    $message = $description;
    $headers = "From: ".$addresse." \r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
    
    // Send email
    $mailSent = mail($mailDest, $subject, $message, $headers);
    
    if ($mailSent) {
        echo "Email sent successfully.";
    } else {
        echo "Email sending failed.";
    }
    

}
?>