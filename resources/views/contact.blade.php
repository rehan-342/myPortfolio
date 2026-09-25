@extends('layouts.pagelayout')

@section('title', 'Contact')
@section('meta_description', 'Get in touch with Mohammad Rehan for junior developer roles or freelance work.')

@section('content')

<section class="section page-intro" data-reveal-section>
    <div class="container">
        <p class="hero-kicker">Contact</p>
        <h1>Let's work together</h1>
        <p class="page-intro-body">
            Whether you're hiring for a junior developer role, need help on a project, or just want to
            talk about Laravel — send a message and I'll get back to you.
        </p>
    </div>
</section>

<section class="section contact-section" data-reveal-section>
    <div class="container contact-grid">

        <form class="contact-form" id="contactForm" method="POST" action="/sendmessage" >
            @csrf

            <div class="form-status {{ session('status') ? 'is-success' : '' }}" id="formStatus" role="status" aria-live="polite" {{ session('status') ? '' : 'hidden' }}>
                {{ session('status') }}
            </div>

            @if ($errors->any())
                <div class="form-status is-error" role="alert">
                    Please fix the errors below and try again.
                </div>
            @endif

            <div class="form-field">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" value="{{ old('name') }}" autocomplete="name" required>
                <span class="form-error" data-error-for="name">@error('name'){{ $message }}@enderror</span>
            </div>

            <div class="form-field">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" value="{{ old('email') }}" autocomplete="email" required>
                <span class="form-error" data-error-for="email">@error('email'){{ $message }}@enderror</span>
            </div>

            <div class="form-field">
                <label for="subject">Subject</label>
                <input type="text" id="subject" name="subject" value="{{ old('subject') }}" required>
                <span class="form-error" data-error-for="subject">@error('subject'){{ $message }}@enderror</span>
            </div>

            <div class="form-field">
                <label for="message">Message</label>
                <textarea id="message" name="message" rows="6" required>{{ old('message') }}</textarea>
                <span class="form-error" data-error-for="message">@error('message'){{ $message }}@enderror</span>
            </div>

            <button type="submit" class="btn btn-primary form-submit">Send message</button>
        </form>

        <div class="contact-info">
            <a class="contact-info-card" href="mailto:mohammadrehan99111@gmail.com">
                <span class="contact-info-label">Email</span>
                <span class="contact-info-value"></span>
            </a>
            <a class="contact-info-card" href="https://github.com/rehan-342" target="_blank" rel="noopener noreferrer">
                <span class="contact-info-label">GitHub</span>
                <span class="contact-info-value"></span>
            </a>
            <a class="contact-info-card" href="https://www.linkedin.com/in/mohammad-rehan10/" target="_blank" rel="noopener noreferrer">
                <span class="contact-info-label">LinkedIn</span>
                <span class="contact-info-value"></span>
            </a>
        </div>

    </div>
</section>

@endsection
