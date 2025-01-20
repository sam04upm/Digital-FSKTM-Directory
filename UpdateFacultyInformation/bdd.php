<html>
<body>

        <?php
        // Paramètres de connexion
        $servername = "localhost";
        $username = "root";  // Utilisateur MySQL
        $password = "root";  // Pas de mot de passe pour root sur MAMP
        $dbname = "update_room";  // Nom de ta base de données
        $port = 8889;

        // Création de la connexion avec mysqli
        $conn = new mysqli($servername, $username, $password, $dbname,$port);

        // Vérification de la connexion
        if ($conn->connect_error) {
            die("Erreur de connexion à la base de données : " . $conn->connect_error);
        }

        // À la fin, ferme la connexion si elle n'est plus nécessaire
        // $conn->close();
        ?>

</body>
</html>
