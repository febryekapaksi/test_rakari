<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Website Produk')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- buat css -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
</head>
<body>
    @include('partials.navbar')
    <div class="container">
        @yield('content')
        <footer>
            <p>&copy; 2024 Project Test. All rights reserved.</p>
        </footer>
    </div>
    <!-- buat js -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    @yield('scripts')
</body>
</html>
