<?php
$room = isset($_GET['room']) ? htmlspecialchars($_GET['room']) : 'Unknown';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Room</title>
    <link rel="stylesheet" href="style3.css">
    <!--<link rel="stylesheet" href="css/style2.css?v=<?php echo time(); ?>">-->
    <style>
        /* Conteneur principal centré */
        .container {
            max-width: 600px; /* Largeur maximale du conteneur */
            margin: 100px auto; /* Centrage vertical et horizontal */
            background: white; /* Fond blanc */
            padding: 20px; /* Espacement interne */
            border-radius: 10px; /* Coins arrondis */
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Ombre pour un effet flottant */
        }

        /* Titres dans le conteneur */
        .container h1 {
            font-size: 2rem;
            margin-bottom: 20px;
            color: #444;
            text-align: center; /* Centrage du texte */
        }

        /* Formulaire */
        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: #555;
        }

        .form-group input {
            width: 96%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 1rem;
        }

        /* Boutons */
        .btn-group {
            display: flex;
            justify-content: center; /* Centre les boutons horizontalement */
            gap: 10px; /* Espace entre les boutons */
        }

        .btn {
            background: #0950ae;
            color: #fff;
            padding: 10px 20px; /* Ajuste la taille */
            border: none;
            border-radius: 5px;
            font-size: 1rem;
            cursor: pointer;
            transition: background 0.3s;
        }

        .btn:hover {
            background: #063d86;
        }

        .btn:active {
            background: #042b5c;
        }
    </style>
</head>
<body>
    <!-- Header -->
    <div class="header">
        <div class="hamburger" onclick="location.href='index.php';">
            <div></div>
            <div></div>
            <div></div>
        </div>
        <h1>Digital FSKTM Directory</h1>
    </div>

    <!-- Conteneur centré -->
    <div class="container">
    <h1 style="color: #063d86;">Update Room Information: <?php echo $room; ?></h1>
        <form action="success.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="name">Room Name:</label>
                <input type="text" id="name" name="name" placeholder="Enter room name" required>
            </div>

            <div class="form-group">
                <label for="id">Room ID:</label>
                <input type="text" id="id" name="id" placeholder="Enter room ID" required>
            </div>

            <div class="form-group">
                <label for="location">Location:</label>
                <input type="text" id="location" name="location" placeholder="Enter room location" required>
            </div>

            <div class="form-group">
                <label for="picture">Picture:</label>
                <input type="file" id="picture" name="picture">
            </div>

            <div class="btn-group">
                <button type="button" onclick="window.history.back();" class="btn">Cancel</button>
                <button type="submit" class="btn">Done</button>
            </div>
        </form>
    </div>
    <!-- Footer -->
    <footer>
        <p>&copy; 2025 Digital FSKTM Directory. All rights reserved.</p>
    </footer>
</body>
</html>
