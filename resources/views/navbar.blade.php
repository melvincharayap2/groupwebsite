<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar Example</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/nav.css') }}">
</head>
<body>
    <nav class="navbar">
        <div class="logo">
            <img src="{{ asset('assets/images/hanspey1.png') }}" alt="Hanspey Logo">
            <h2>Hanspey</h2>
        </div>
        <button class="toggle-button" onclick="toggleNavbar()">☰</button>
        <ul class="nav-links">
            <li><a href="{{url('home')}}">Home</a></li>
            <li><a href="{{url('menu')}}">Menu</a></li>
            <li><a href="{{url('booktable')}}">Booktable</a></li>
            <li><a href="{{url('about')}}">About</a></li>
        </ul>
    </nav>
    <script>
        function toggleNavbar() {
            const navLinks = document.querySelector('.nav-links');
            navLinks.classList.toggle('active');
        }
    </script>
</body>
</html>
