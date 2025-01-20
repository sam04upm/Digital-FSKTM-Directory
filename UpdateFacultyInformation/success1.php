<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Success</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Header -->
    <div class="header">
        <h1 style="text-align: right;">Digital FSKTM Directory</h1>
    </div>
    <div class="container">
        <h1>Update Successfully!</h1>
        <p>The room information has been updated.</p>
        <a href="index.php" class="btn">Back to Dashboard</a>
    </div>

    <footer>
        <p>&copy; 2025 Digital FSKTM Directory. All rights reserved.</p>
    </footer>

</body>
</html>

<?php
// Inclure le fichier de connexion à la base de données
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
        $upload_dir = 'uploads/';
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

    try {
        // Préparer la requête SQL pour insérer les données
        $stmt = $pdo->prepare("
            INSERT INTO room (id, name, location, picture)
            VALUES (:id, :name, :location, :picture)
        ");
        $stmt->execute([
            'id' => $id,
            'name' => $name,
            'location' => $location,
            'picture' => $picture
        ]);

        echo "Room information saved successfully!";
        echo "<br><a href='index.html'>Go back to home</a>";
    } catch (PDOException $e) {
        echo "Error saving room information: " . $e->getMessage();
    }
} else {
    echo "Invalid request method.";
}
?>
