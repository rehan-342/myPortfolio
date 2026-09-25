<footer class="site-footer">
    <div class="container footer-inner">
        <div class="footer-brand">
            <span class="logo-mark">MOHAMMAD REHAN<span class="logo-dot">.</span></span>
            <p>Building things for the web, one commit at a time.</p>
        </div>

        <nav class="footer-links" aria-label="Footer">
            <a href="{{ route('home') }}">Home</a>
            <a href="{{ route('about') }}">About</a>
            <a href="{{ route('prj') }}">Projects</a>
            <a href="{{ route('contact') }}">Contact</a>
        </nav>

        <div class="footer-social">
            <a href="https://github.com/rehan-342" target="_blank" rel="noopener noreferrer">GitHub</a>
            <a href="https://www.linkedin.com/in/mohammad-rehan10/" target="_blank" rel="noopener noreferrer">LinkedIn</a>
            <a href="mohammadrehan99111@gamil.com">Email</a>
        </div>
    </div>

    <div class="container footer-bottom">
        <p>&copy; {{ date('Y') }} Mohammad Rehan. Built with Laravel Blade.</p>
    </div>
</footer>
