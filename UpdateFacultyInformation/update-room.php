<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Room</title>
    <link rel="stylesheet" href="style.css">
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


    <!-- Contenu principal -->
    <div class="container">
        <h1>Select Room to Update</h1>
        <form action="edit-room.php" method="GET">
            <div class="btn-group">
                <button type="submit" name="room" value="Lab" class="btn">Lab</button>
                <button type="submit" name="room" value="Toilet" class="btn">Toilet</button>
                <button type="submit" name="room" value="Lecture Hall" class="btn">Lecture Hall</button>
                <button type="submit" name="room" value="Future Classroom" class="btn">Future Classroom</button>
                <button type="submit" name="room" value="Office" class="btn">Office</button>
            </div>
    </form>
</div>

    <!-- Footer -->
    <footer>
        <p>&copy; 2025 Digital FSKTM Directory. All rights reserved.</p>
    </footer>
    
</body>
</html>
