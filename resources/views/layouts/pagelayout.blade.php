<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')-</title>
    <meta name="description" content="@yield('meta_description', 'Portfolio of Mohammad Rehan, a junior web developer specializing in Laravel, PHP and JavaScript.')">


     <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@500;600;700&family=Inter:wght@400;500;600&family=JetBrains+Mono:wght@400;500;600&display=swap" rel="stylesheet">
       

        <link rel="stylesheet" href="style.css">

</head>
<body>

    <a href="#main-content" class="skip-link">Skip to content</a>

    @include('layouts.navlayout')

    <main id="main-content">
        @yield('content')
    </main>

    @include('layouts.footerLayout')

    <!-- Global script -->
    <script src="script.js" defer></script>

    @yield('scripts')
</body>
</html>
