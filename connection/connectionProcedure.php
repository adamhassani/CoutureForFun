<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "baseDonnee";
if (isset($_POST['connection'])) {
    
    $mailConn = $_POST['mailConn'];
    $mdpConn = $_POST['mdpConn'];
    

    try {
        // Create connection to MySQL server
        $connConn = new PDO("mysql:host=$servername", $username, $password);
        $connConn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Check if the database exists
        $resultConn = $connConn->query("SHOW DATABASES LIKE '$dbname'");
        if ($resultConn->rowCount() == 0) {
            // Database does not exist, so create it
            $sql_create_dbConn = "CREATE DATABASE $dbname";
            $connConn->exec($sql_create_dbConn);
            $connConn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            $connConn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // now creating the table of the clients
            try {
                //$sql_file = "baseDonnée.sql";
                $sql_statementsConn = "CREATE TABLE Clients (
                    `nom` varchar(50) NOT NULL,
                    `prenom` varchar(50) NOT NULL,
                    `mail` varchar(100) NOT NULL,
                    `motDePasse` varchar(255) NOT NULL,
                    `Cours` varchar(80) NOT NULL
                  ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;";
                $connConn->exec($sql_statementsConn);
                
                $connConn = null; // then end the connection to restart it 
            } catch( Exception $e){
                echo  "Error".$e->getMessage();
            }
        } 
        $connConn = null;

        // Connect to the specified database
        $connConn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $connConn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // Check if the email already exists in the Clients table
        $sql_check_emailConn = "SELECT COUNT(*) as mail_count FROM Clients WHERE mail = ?";
        $stmtConn = $connConn->prepare($sql_check_emailConn);
        $stmtConn->execute([$mailConn]);
        $rowConn = $stmtConn->fetch(PDO::FETCH_ASSOC);
        if ($rowConn['mail_count'] == 1) {
            // Fetch user details
            $sql_fetch_userConn = "SELECT * FROM Clients WHERE mail = ?";
            $stmtConn = $connConn->prepare($sql_fetch_userConn);
            $stmtConn->execute([$mailConn]);
            $userConn = $stmtConn->fetch(PDO::FETCH_ASSOC);
            echo '<script>mailConnCheck();</script>';
            // Ccompare the passwords
            if ($userConn['motDePasse'] == $mdpConn) {
                echo '<script>passConnCheck();</script>'; // remove the pass error in case it appears
                $_SESSION['logged_in'] = true;
                $_SESSION['username'] = $userConn['prenom']." ".$userConn['nom'];
                $_SESSION['user_mail'] = $userConn['mail'];
                $_SESSION['user_nom'] = $userConn['nom'];
                $_SESSION['user_prenom'] = $userConn['prenom'];
                echo '<script>window.location.href = "../accueil/accueil.php"</script>'; // redirect to the initial page
            } else {
                echo '<script>passConnErrorMsg();</script>'; // add pass error message
                
            }
        } else {
            
            echo '<script>mailConnErrorMsg();</script>'; // add mail error message 
            echo '<script>passConnCheck();</script>'; // remove pass error so the client is not confused by the errors
        }

    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    } finally {
        // Close the connection
        $connConn = null;
    }
}
?>