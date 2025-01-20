<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Success</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="header">
    <div class="hamburger" onclick="location.href='index.php';">
            <div></div>
            <div></div>
            <div></div>
        </div>
        <h1>Digital FSKTM Directory</h1>
    </div>

    <div class="container success">
        <h1>Update Successfully!</h1>
        <p>The room information has been updated successfully.</p>
        <a href="index.php" class="btn" style="margin-top: 40px;">Back to Dashboard</a>
    </div>

    <footer>
        <p>&copy; 2025 Digital FSKTM Directory. All rights reserved</p>
    </footer>
</body>
</html>

<?php
// Inclure la connexion à la base de données avec mysqli
include 'bdd.php';

// Vérifier si la requête est bien de type POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupérer les données du formulaire
    $name = htmlspecialchars($_POST['name']);
    $id = htmlspecialchars($_POST['id']);
    $location = htmlspecialchars($_POST['location']);

    // Gérer le téléchargement de l'image
    $picture = null;
    if (isset($_FILES['picture']) && $_FILES['picture']['error'] === UPLOAD_ERR_OK) {
        $upload_dir = 'uploads/'; // Dossier pour les images téléchargées
        $picture_name = basename($_FILES['picture']['name']);
        $picture_path = $upload_dir . $picture_name;

        // Créer le dossier de téléchargement s'il n'existe pas
        if (!is_dir($upload_dir)) {
            mkdir($upload_dir, 0777, true);
        }

        // Déplacer le fichier téléchargé vers le dossier cible
        if (move_uploaded_file($_FILES['picture']['tmp_name'], $picture_path)) {
            $picture = $picture_path; // Chemin relatif du fichier
        }
    }

    // Préparer la requête SQL pour insérer les données
    $stmt = $conn->prepare("INSERT INTO room (id, name, location, picture) VALUES (?, ?, ?, ?)");

    // Vérifier si la préparation a réussi
    if ($stmt) {
        // Lier les paramètres
        $stmt->bind_param("ssss", $id, $name, $location, $picture);

        // Exécuter la requête
        if ($stmt->execute()) {
            // Rediriger vers la page de succès si tout s'est bien passé
            header("Location: success.php");
            exit();
        } else {
            echo "Erreur lors de l'insertion : " . $stmt->error;
        }

        // Fermer la requête
        $stmt->close();
    } else {
        echo "Erreur de préparation de la requête : " . $conn->error;
    }

    
    // Fermer la connexion
    
    $conn->close();
} // else {
   // echo "Méthode de requête invalide.";
//}
?>




