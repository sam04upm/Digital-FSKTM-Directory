<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faculty Map Image</title>
    @vite('resources/faculty.css')
    @vite('resources/js/app.js')

</head>
<body>
    <div class="font-h1">
        <h1 class="text-insert">FACULTY MAP IMAGE</h1>
    </div>

    <div class="gallery">
        <div class="image-container">
            <img src="facultyimage.png">
            <img src="faculty-image1.png">
            <img src="faculty-image2.png">
            <img src="faculty-image3.png">
            <img src="faculty-image4.png">
        </div>
    </div>

    <div class="rectangle">
        <img src="facultyimage.png" class="rectangle-image">
        <button class="zoom-in">+</button>
        <button class="zoom-out">-</button>
    </div>

    <div class="container">
        <a href="{{ route ('home') }}">
            <div class="return-rectangle"></div>
        </a>
    </div>
    
</body>
</html>