<?php
$mailDest = "coutureForFun@mail.com";
if (isset($_POST['envoyer-devis'])) {
  
    $addresse = $_POST['mailDevis'];
    $description =$_POST['descriptionN'];
    
    $recapDevis = $_POST['recapDevis'];
    $subject = "Devis gratuis";

    $message = $recapDevis."\n Description: ".$description;

    $headers = "From: ".$addresse." \r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
    
    // Send email
    $mailSent = mail($mailDest, $subject, $message, $headers);
    
    
    if ($mailSent){
        echo '<script>window.location.href="../cours/requestSent.php";</script>'; // suppossing that the mail sending protocol and  config file are correct and smtp server is running 
    }else {
        echo '<script>window.location.href="../cours/requestFailed.php";</script>';
    }
    
    

}
?>