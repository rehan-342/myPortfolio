@extends('layouts.pagelayout')

@section('title', 'About')
@section('meta_description', 'About Mohammad Rehan — BCA student and junior web developer.')

@section('content')

<section class="section page-intro" data-reveal-section>
    <div class="container">
        <p class="hero-kicker">About</p>
        <h1>About me</h1>
        <div class="page-intro-body">
            <p>
                I'm a BCA student and junior developer who enjoys turning ideas into working software.
                Most of my time goes into building small, real projects — a login system, a management
                dashboard, a music player — rather than just reading about how they're built.
            </p>
            <p>
                I like the backend side of things: databases, authentication, server logic, and the way
                a Laravel application is organised. At the same time, I care about how an interface feels
                to use, so I spend just as much effort on the front end — layout, responsiveness and small
                interaction details.
            </p>
            <p>
                Right now I'm focused on getting better at problem solving, writing code that's easy to
                read six months later, and picking up whatever a project actually needs, whether that's a
                new PHP pattern or a JavaScript technique I haven't used before.
            </p>
        </div>
    </div>
</section>

<section class="section" data-reveal-section>
    <div class="container">
        <div class="section-heading">
            <h2>Skills</h2>
            <p>Grouped by where I use them.</p>
        </div>

        <div class="skills-groups">
            <div class="skills-group">
                <h3 class="skills-group-title">Frontend</h3>
                <div class="skill-cards">
                    <span class="skill-card">HTML</span>
                    <span class="skill-card">CSS</span>
                    <span class="skill-card">JavaScript</span>
                </div>
            </div>

            <div class="skills-group">
                <h3 class="skills-group-title">Backend</h3>
                <div class="skill-cards">
                    <span class="skill-card">PHP</span>
                    <span class="skill-card">Laravel</span>
                    <span class="skill-card">MySQL</span>
                    <span class="skill-card">REST APIs</span>
                </div>
            </div>

            <div class="skills-group">
                <h3 class="skills-group-title">Languages</h3>
                <div class="skill-cards">
                    <span class="skill-card">Java</span>
                    <span class="skill-card">C / C++</span>
                </div>
            </div>

            <div class="skills-group">
                <h3 class="skills-group-title">Tools</h3>
                <div class="skill-cards">
                    <span class="skill-card">Git &amp; GitHub</span>
                    <span class="skill-card">Linux</span>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section" data-reveal-section>
    <div class="container">
        <div class="section-heading">
            <h2>My journey</h2>
            <p>How I got from coursework to shipped projects.</p>
        </div>

        <ol class="timeline">
            <li class="timeline-item">
                <div class="timeline-marker" aria-hidden="true"></div>
                <div class="timeline-content">
                    <h3>BCA</h3>
                    <p>Started my Bachelor of Computer Applications, building a foundation in programming, data structures and databases.</p>
                </div>
            </li>
            <li class="timeline-item">
                <div class="timeline-marker" aria-hidden="true"></div>
                <div class="timeline-content">
                    <h3>Web development</h3>
                    <p>Learned HTML, CSS and JavaScript, and started building static sites and small interactive pages.</p>
                </div>
            </li>
            <li class="timeline-item">
                <div class="timeline-marker" aria-hidden="true"></div>
                <div class="timeline-content">
                    <h3>Backend development</h3>
                    <p>Moved into PHP and MySQL to understand how data is stored, queried and secured on the server.</p>
                </div>
            </li>
            <li class="timeline-item">
                <div class="timeline-marker" aria-hidden="true"></div>
                <div class="timeline-content">
                    <h3>Laravel</h3>
                    <p>Adopted Laravel for structured, maintainable backend architecture — routing, Blade, and Eloquent.</p>
                </div>
            </li>
            <li class="timeline-item">
                <div class="timeline-marker" aria-hidden="true"></div>
                <div class="timeline-content">
                    <h3>JavaScript</h3>
                    <p>Went deeper into vanilla JavaScript for DOM interactions, form validation and dynamic UI behaviour.</p>
                </div>
            </li>
            <li class="timeline-item">
                <div class="timeline-marker" aria-hidden="true"></div>
                <div class="timeline-content">
                    <h3>Projects</h3>
                    <p>Applied all of it to real builds: a user management system, an admit card management system, and this portfolio.</p>
                </div>
            </li>
        </ol>
    </div>
</section>

@endsection
