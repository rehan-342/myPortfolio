@extends('layouts.pagelayout')

@section('title', 'Projects')
@section('meta_description', 'Projects built by Mohammad Rehan using PHP, Laravel, MySQL and JavaScript.')

@section('content')

<section class="section page-intro" data-reveal-section>
    <div class="container">
        <p class="hero-kicker">Work</p>
        <h1>Projects</h1>
        <p class="page-intro-body">
            A few things I've built while learning backend development, Laravel and JavaScript.
        </p>
    </div>
</section>

<section class="section" data-reveal-section>
    <div class="container">

        <div class="filter-bar" role="group" aria-label="Filter projects by technology">
            <button type="button" class="filter-btn is-active" data-filter="all">All</button>
            <button type="button" class="filter-btn" data-filter="php">PHP</button>
            <button type="button" class="filter-btn" data-filter="laravel">Laravel</button>
            <button type="button" class="filter-btn" data-filter="javascript">JavaScript</button>
            <button type="button" class="filter-btn" data-filter="other">Other</button>
        </div>

        <div class="project-grid" id="projectGrid">

            <article class="project-card" data-tags="php other">
                <div class="project-media" aria-hidden="true">
                    <span class="project-media-tag">UMS</span>
                </div>
                <div class="project-body">
                    <h3>User Management System</h3>
                    <p>A CRUD application with authentication and session handling for managing user accounts.</p>
                    <ul class="project-features">
                        <li>Login &amp; sessions</li>
                        <li>Add, update and delete users</li>
                        <li>Profile image upload</li>
                    </ul>
                    <div class="project-tech">
                        <span>PHP</span><span>MySQL</span><span>HTML</span><span>CSS</span>
                    </div>
                    <div class="project-links">
                        <a href="https://github.com/your-username/user-management-system" target="_blank" rel="noopener noreferrer" class="btn btn-text">GitHub</a>
                        <a href="#" class="btn btn-text project-demo-link">Live demo</a>
                    </div>
                </div>
            </article>

            <article class="project-card" data-tags="php other">
                <div class="project-media" aria-hidden="true">
                    <span class="project-media-tag">ACMS</span>
                </div>
                <div class="project-body">
                    <h3>Admit Card Management System</h3>
                    <p>An admin panel for issuing and managing admit cards, backed by a relational database.</p>
                    <ul class="project-features">
                        <li>Admin registration &amp; login</li>
                        <li>Admit card management</li>
                        <li>Database integration</li>
                    </ul>
                    <div class="project-tech">
                        <span>PHP</span><span>MySQL</span><span>HTML</span><span>CSS</span>
                    </div>
                    <div class="project-links">
                        <a href="https://github.com/your-username/admit-card-management-system" target="_blank" rel="noopener noreferrer" class="btn btn-text">GitHub</a>
                        <a href="#" class="btn btn-text project-demo-link">Live demo</a>
                    </div>
                </div>
            </article>

            <article class="project-card" data-tags="javascript other">
                <div class="project-media" aria-hidden="true">
                    <span class="project-media-tag">&#9835;</span>
                </div>
                <div class="project-body">
                    <h3>Music Player</h3>
                    <p>A browser-based music player with a playlist and animated cover art.</p>
                    <ul class="project-features">
                        <li>Play, pause, next and previous</li>
                        <li>Progress bar with seek</li>
                        <li>Song list with cover images</li>
                    </ul>
                    <div class="project-tech">
                        <span>HTML</span><span>CSS</span><span>JavaScript</span>
                    </div>
                    <div class="project-links">
                        <a href="https://github.com/your-username/music-player" target="_blank" rel="noopener noreferrer" class="btn btn-text">GitHub</a>
                        <a href="#" class="btn btn-text project-demo-link">Live demo</a>
                    </div>
                </div>
            </article>



@foreach($projects as $p )









            <article class="project-card" data-tags="javascript other">
                <div class="project-media" aria-hidden="true">
                    <span class="project-media-tag"><img src="{{ asset('projectimages/' . $p->image) }}" alt=""></span>
                </div>
                <div class="project-body">
                    <h3>{{ $p->name }}</h3>
                    <p>{{ $p->description }}.</p>
                    <!-- <ul class="project-features">
                       
                    </ul> -->
                   @foreach(explode(',', $p->technologies) as $technology)
    <span>{{ trim($technology) }}</span>
@endforeach
                    <div class="project-links">
                        <a href="{{ $p->gitlink }}" target="_blank" rel="noopener noreferrer" class="btn btn-text">GitHub</a>
                        <a href="{{ $p->url }} " target="blank" class="btn btn-text project-demo-link">Live demo</a>
                    </div>
                </div>
            </article>


@endforeach
























            <article class="project-card" data-tags="laravel javascript">
                <div class="project-media" aria-hidden="true">
                    <span class="project-media-tag">&lt;/&gt;</span>
                </div>
                <div class="project-body">
                    <h3>Developer Portfolio</h3>
                    <p>This site — a Laravel Blade portfolio with a reusable layout and a dark, developer-focused design.</p>
                    <ul class="project-features">
                        <li>Reusable Blade layout</li>
                        <li>Filterable project grid</li>
                        <li>Fully responsive, no framework</li>
                    </ul>
                    <div class="project-tech">
                        <span>Laravel Blade</span><span>HTML</span><span>CSS</span><span>JavaScript</span>
                    </div>
                    <div class="project-links">
                        <a href="https://github.com/your-username/developer-portfolio" target="_blank" rel="noopener noreferrer" class="btn btn-text">GitHub</a>
                        <a href="#" class="btn btn-text project-demo-link">Live demo</a>
                    </div>
                </div>
            </article>

        </div>

        <p class="project-empty" id="projectEmpty" hidden>No projects match this filter yet.</p>
    </div>
</section>

@endsection
