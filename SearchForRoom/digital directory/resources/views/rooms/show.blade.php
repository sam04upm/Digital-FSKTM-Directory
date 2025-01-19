<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $room -> name}} Info</title>
    @vite('resources/css/showroom.css')
    @vite('resources/js/show.js')
</head>

<body>
<header>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <icon onclick="click" id=sidebarToggle class="icon" style="cursor: pointer;"><img src="{{ asset('images/menu.png') }}" alt="Menu Icon" width="50" height="50"></icon>
            <div id="sidebar" class="sidebar">
                <h3>Sidebar</h3>
                <ul>
                    <li><a href="#">Link 1</a></li>
                    <li><a href="#">Link 2</a></li>
                    <li><a href="#">Link 3</a></li>
                </ul>
            </div>

            <h2>GRIDFALCON</h2>

            <div class="text-container">
                <span class="main-text">{{ $room->name }}</span>
                <p>Room ID = {{ $room->idRoom }}</p>
                <p>Room Location = {{ $room->location}}</p>
                <p>Room status = {{ $room->stat}}</p>
                <p>Faculty of Science Computer and Information Technology</p>
            </div>
        </div>
    </div>
</div>

</header>
</body>
</html>