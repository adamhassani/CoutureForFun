<?php
$mailDest = "ali.terro@etu.unilim.fr";
if (isset($_POST['envoyer-devis'])) {
  
    $addresse = $_POST['mailDevis'];
    
    $recapDevis = $_POST['recapDevis'];

    $subject = "Devis gratuis";
    $message = $recapDevis;
    $headers = "From: ".$addresse." \r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
    
    // Send email
    $mailSent = mail($mailDest, $subject, $message, $headers);
    
    
    echo '<script>window.location.href="requestSent.php";</script>'; // supposing that file config are correct for sending mails , and smtp server is running
    

}
?>