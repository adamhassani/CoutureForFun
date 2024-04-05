<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "baseDonnee"; // Database name without the '.sql' extension

if (isset($_POST['inscrire'])) {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $mail = $_POST['mail'];
    $mdp = $_POST['mdp'];
    echo '<script>alert("coucou")</script>';

    try {
        // Create connection to MySQL server
        $conn = new PDO("mysql:host=$servername", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Check if the database exists
        $result = $conn->query("SHOW DATABASES LIKE '$dbname'");
        if ($result->rowCount() == 0) {
            // Database does not exist, so create it
            $sql_create_db = "CREATE DATABASE $dbname";
            $conn->exec($sql_create_db);
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // now creating the table of the clients
            try {
                //$sql_file = "baseDonnée.sql";
                $sql_statements = "CREATE TABLE Clients (
                    `nom` varchar(50) NOT NULL,
                    `prenom` varchar(50) NOT NULL,
                    `mail` varchar(100) NOT NULL,
                    `motDePasse` varchar(255) NOT NULL
                  ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;";
                $conn->exec($sql_statements);
                echo "SQL statements executed successfully<br>";
                echo "Database created successfully<br>";
                $conn = null; // then end the connection to restart it 
            } catch( Exception $e){
                echo  "Error".$e->getMessage();
            }
        } else {
            
            echo "Database already exists<br>";
            }
        
        // Connect to the specified database if the data base exists already 
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // Check if the email already exists in the Clients table
        $sql_check_email = "SELECT COUNT(*) as mail_count FROM Clients WHERE mail = ?";
        $stmt = $conn->prepare($sql_check_email);
        $stmt->execute([$mail]);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($row['mail_count'] == 0) {
            // Insert the new record into the Clients table
            $sql_insert_client = "INSERT INTO Clients(nom, prenom, mail, motDePasse) VALUES (?, ?, ?, ?)";
            $stmt = $conn->prepare($sql_insert_client); //seperate the the queries data from the logic to prevent any sql injection 
            $stmt->execute([$nom, $prenom, $mail, $mdp]); // array for place holders instead of binding seperatly
            echo '<script>mailInsCheck();</script>';
            echo '<script>alert("Added the mail")</script>';
        } else {
            echo '<script>mailInsError();</script>';
        }

    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    } finally {
        // Close the connection
        $conn = null;
    }
}
?>
