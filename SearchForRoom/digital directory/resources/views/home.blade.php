<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digital FSKTM Directory</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    @livewireStyles
</head>

<body>
    <header>

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <icon onclick="click" id=sidebarToggle class="icon" style="cursor: pointer;"><img src="images/menu.png" alt="Menu Icon" width="50" height="50"></icon>
                    <div id="sidebar" class="sidebar">
                        <h3>Sidebar</h3>
                        <ul>
                            <li><a href="#">Link 1</a></li>
                            <li><a href="#">Link 2</a></li>
                            <li><a href="#">Link 3</a></li>
                        </ul>
                    </div>

                    <h2>GRIDFALCON</h2>
                    <h3 class='button' style="cursor: pointer;">LOGIN</h3>
                    <h1>Digital FSKTM Directory</h1>

                    <!-- Search Form -->
                    <livewire:RoomSearch />

                    <small>Where do you need to go?</small>
                    <factxt style="cursor: pointer;">FACULTY MAP IMAGE</factxt>
                    <fac class="image" style="cursor: pointer;"><img src="images/facultyimage.png" alt="Faculty Image" width="300" height="200" class="rounded-image"></fac>
                </div>
            </div>
        </div>

    </header>
    @livewireScripts
</body>
</html>