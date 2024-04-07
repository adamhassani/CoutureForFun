<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "baseDonnee";

if (isset($_POST['envoyer-inscriptioncours'])) {
    
    $cours = $_POST['cours'];
    $usermail = $_SESSION['user_mail']; // get the mail of the connected account from the current session

    try {

        // Connect to the specified database
        $connS= new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $connS->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql_check_coursS = "SELECT Cours FROM Clients WHERE mail = ?";
        $stmtS = $connS->prepare($sql_check_coursS);
        $stmtS->execute([$usermail]);
        $rowS = $stmtS->fetch(PDO::FETCH_ASSOC);

        if ($rowS['Cours'] == 'None')
        {
            $sql_update_cours = "UPDATE Clients SET Cours = ? WHERE mail = ?";
            $stmtU = $connS->prepare($sql_update_cours);
            $stmtU->execute([$cours,$usermail]);
            echo "<script>remCoursError();</script>";
            
            echo '<script>window.location.href="requestSent.php";</script>';
        }else {
            echo "<script>addCoursError();</script>";
        }

        

    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    } finally {
        // Close the connection
        $connS = null;
    }
}
?>
