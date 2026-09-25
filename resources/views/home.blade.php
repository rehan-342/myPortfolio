@extends('layouts.pagelayout')

@section('title', 'Home')
@section('meta_description', 'Mohammad Rehan — Junior Web Developer building with Laravel, PHP, MySQL and JavaScript.')

@section('content')

<section class="hero">
    <div class="container hero-grid">

        <div class="hero-copy">
            <p class="hero-kicker">BCA Student &middot; Junior Web Developer</p>
            <h1 class="hero-title">
                Mohammad Rehan
            </h1>
            <p class="hero-subtitle">
                I build modern, responsive and practical web applications using clean code
                and modern technologies — from Laravel backends to interactive front ends.
            </p>

            <div class="hero-actions">
                <a href="{{ route('prj') }}" class="btn btn-primary">View my projects</a>
                <a href="{{ route('contact') }}" class="btn btn-secondary">Contact me</a>
                <a href="{{ asset('files/resume.pdf') }}" class="btn btn-text" download>
                    Download resume
                    <span aria-hidden="true">&darr;</span>
                </a>
            </div>

            <div class="hero-stack">
                <span class="hero-stack-label">Currently working with</span>
                <ul class="hero-stack-list">
                    <li>Laravel</li>
                    <li>PHP</li>
                    <li>MySQL</li>
                    <li>JavaScript</li>
                </ul>
            </div>
        </div>

        <div class="hero-visual" aria-hidden="true">
            <div class="terminal-window">
                <div class="terminal-titlebar">
                    <span class="terminal-dot"></span>
                    <span class="terminal-dot"></span>
                    <span class="terminal-dot"></span>
                    <span class="terminal-path">rehan@dev &#8212; portfolio.sh</span>
                </div>
                <div class="terminal-body" id="terminalBody">
                    <p class="terminal-line"><span class="terminal-prompt">$</span> <span class="terminal-command" data-text="whoami"></span></p>
                    <p class="terminal-output" data-reveal>mohammad_rehan</p>

                    <p class="terminal-line"><span class="terminal-prompt">$</span> <span class="terminal-command" data-text="cat role.txt"></span></p>
                    <p class="terminal-output" data-reveal>Junior Web Developer / Software Developer</p>

                    <p class="terminal-line"><span class="terminal-prompt">$</span> <span class="terminal-command" data-text="ls skills/"></span></p>
                    <p class="terminal-output" data-reveal>html css js php mysql laravel java c-cpp git linux</p>

                    <p class="terminal-line"><span class="terminal-prompt">$</span> <span class="terminal-command" data-text="./build.sh --project=portfolio"></span></p>
                    <p class="terminal-output terminal-success" data-reveal>&#10003; Build complete. Ready for review.</p>

                    <p class="terminal-line terminal-cursor-line"><span class="terminal-prompt">$</span> <span class="terminal-cursor" aria-hidden="true"></span></p>
                </div>
            </div>

            <div class="floating-card floating-card-1">
                <span class="floating-dot"></span> Open to junior roles
            </div>
            <div class="floating-card floating-card-2">
                <code>&lt;/&gt;</code> Clean, readable code
            </div>
        </div>

    </div>
</section>

<section class="section highlights" data-reveal-section>
    <div class="container">
        <div class="section-heading">
            <h2>What I focus on</h2>
            <p>Three things guide how I build software right now.</p>
        </div>

        <div class="highlight-grid">
            <article class="highlight-card">
                <h3>Backend fundamentals</h3>
                <p>Working with PHP, Laravel and MySQL to design clean, understandable server-side logic and database structures.</p>
            </article>
            <article class="highlight-card">
                <h3>Practical front ends</h3>
                <p>Turning designs into responsive, accessible interfaces with semantic HTML, modern CSS and vanilla JavaScript.</p>
            </article>
            <article class="highlight-card">
                <h3>Learning in public</h3>
                <p>Documenting projects on GitHub, writing readable commits, and picking up new tools as real projects need them.</p>
            </article>
        </div>
    </div>
</section>

<section class="section cta-band" data-reveal-section>
    <div class="container cta-band-inner">
        <div>
            <h2>Have a project in mind?</h2>
            <p>I'm currently looking for junior developer opportunities and freelance work.</p>
        </div>
        <a href="{{ route('contact') }}" class="btn btn-primary">Get in touch</a>
    </div>
</section>

@endsection
