<header class="site-header" id="site-header">
    <div class="container nav-inner">

        <a href="{{ route('home') }}" class="logo" aria-label="Mohammad Rehan — home">
            <span class="logo-mark">REHAN<span class="logo-dot">.</span></span>
        </a>

        <nav class="nav-desktop" aria-label="Primary">
            <ul>
                <li><a href="{{ route('home') }}" class="nav-link {{ request()->routeIs('home') ? 'is-active' : '' }}">Home</a></li>
                <li><a href="{{ route('about') }}" class="nav-link {{ request()->routeIs('about') ? 'is-active' : '' }}">About</a></li>
                <li><a href="{{ route('prj') }}" class="nav-link {{ request()->routeIs('projects') ? 'is-active' : '' }}">Projects</a></li>
                <li><a href="{{ route('contact') }}" class="nav-link {{ request()->routeIs('contact') ? 'is-active' : '' }}">Contact</a></li>
            </ul>
        </nav>

        <a href="{{ route('contact') }}" class="btn btn-ghost nav-cta">Let's talk</a>

        <button type="button" class="menu-toggle" id="menuToggle" aria-expanded="false" aria-controls="mobileMenu" aria-label="Open menu">
            <span class="menu-toggle-bar"></span>
            <span class="menu-toggle-bar"></span>
            <span class="menu-toggle-bar"></span>
        </button>
    </div>



  

     <nav id="mobileMenu" class="nav-mobile" aria-label="Mobile">
        <ul>
            <li><a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'is-active' : '' }}">Home</a></li>
            <li><a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'is-active' : '' }}">About</a></li>
            <li><a href="{{ route('prj') }}" class="{{ request()->routeIs('projects') ? 'is-active' : '' }}">Projects</a></li>
            <li><a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'is-active' : '' }}">Contact</a></li>
        </ul>
    </nav>
</header>
