(function () {
    'use strict';

    var prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

    /* ----------------------------------------------------------------
       Mobile menu
       ---------------------------------------------------------------- */
    function initMobileMenu() {
        var toggle = document.getElementById('menuToggle');
        var menu = document.getElementById('mobileMenu');
        if (!toggle || !menu) return;

        toggle.addEventListener('click', function () {
            var isOpen = menu.classList.toggle('is-open');
            toggle.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
            toggle.setAttribute('aria-label', isOpen ? 'Close menu' : 'Open menu');
        });

        menu.querySelectorAll('a').forEach(function (link) {
            link.addEventListener('click', function () {
                menu.classList.remove('is-open');
                toggle.setAttribute('aria-expanded', 'false');
                toggle.setAttribute('aria-label', 'Open menu');
            });
        });
    }

    /* ----------------------------------------------------------------
       Terminal typing effect (hero)
       ---------------------------------------------------------------- */
    function initTerminal() {
        var body = document.getElementById('terminalBody');
        if (!body) return;

        var commands = body.querySelectorAll('.terminal-command');
        var outputs = body.querySelectorAll('[data-reveal]');

        outputs.forEach(function (el) { el.style.visibility = 'hidden'; });

        if (prefersReducedMotion) {
            commands.forEach(function (el) { el.textContent = el.dataset.text; });
            outputs.forEach(function (el) { el.style.visibility = 'visible'; });
            return;
        }

        commands.forEach(function (el) { el.textContent = ''; });

        var commandIndex = 0;

        function typeCommand(el, text, onDone) {
            var i = 0;
            var interval = setInterval(function () {
                el.textContent = text.slice(0, i + 1);
                i++;
                if (i >= text.length) {
                    clearInterval(interval);
                    onDone();
                }
            }, 28);
        }

        function runNext() {
            if (commandIndex >= commands.length) return;
            var el = commands[commandIndex];
            var text = el.dataset.text || '';
            typeCommand(el, text, function () {
                var output = outputs[commandIndex];
                if (output) {
                    setTimeout(function () {
                        output.style.visibility = 'visible';
                    }, 150);
                }
                commandIndex++;
                setTimeout(runNext, 380);
            });
        }

        runNext();
    }

    /* ----------------------------------------------------------------
       Scroll reveal for sections
       ---------------------------------------------------------------- */
    function initScrollReveal() {
        var sections = document.querySelectorAll('[data-reveal-section]');
        if (!sections.length) return;

        if (prefersReducedMotion || !('IntersectionObserver' in window)) {
            sections.forEach(function (el) { el.classList.add('is-visible'); });
            return;
        }

        var observer = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    entry.target.classList.add('is-visible');
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.15 });

        sections.forEach(function (el) { observer.observe(el); });
    }

    /* ----------------------------------------------------------------
       Project filtering
       ---------------------------------------------------------------- */
    function initProjectFilter() {
        var buttons = document.querySelectorAll('.filter-btn');
        var cards = document.querySelectorAll('.project-card');
        var emptyState = document.getElementById('projectEmpty');
        if (!buttons.length || !cards.length) return;

        buttons.forEach(function (btn) {
            btn.addEventListener('click', function () {
                buttons.forEach(function (b) { b.classList.remove('is-active'); });
                btn.classList.add('is-active');

                var filter = btn.dataset.filter;
                var visibleCount = 0;

                cards.forEach(function (card) {
                    var tags = (card.dataset.tags || '').split(' ');
                    var matches = filter === 'all' || tags.indexOf(filter) !== -1;
                    card.classList.toggle('is-hidden', !matches);
                    if (matches) visibleCount++;
                });

                if (emptyState) emptyState.hidden = visibleCount !== 0;
            });
        });
    }

    /* ----------------------------------------------------------------
       Contact form validation
       ---------------------------------------------------------------- */
    function initContactForm() {
        var form = document.getElementById('contactForm');
        if (!form) return;

        var status = document.getElementById('formStatus');

        var rules = {
            name: function (v) { return v.trim().length > 0 || 'Please enter your name.'; },
            email: function (v) {
                if (!v.trim()) return 'Please enter your email.';
                var pattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                return pattern.test(v) || 'Please enter a valid email address.';
            },
            subject: function (v) { return v.trim().length > 0 || 'Please add a subject.'; },
            message: function (v) { return v.trim().length >= 10 || 'Message should be at least 10 characters.'; }
        };

        function setFieldError(field, message) {
            var wrapper = field.closest('.form-field');
            var errorEl = form.querySelector('[data-error-for="' + field.name + '"]');
            if (message) {
                wrapper.classList.add('has-error');
                if (errorEl) errorEl.textContent = message;
            } else {
                wrapper.classList.remove('has-error');
                if (errorEl) errorEl.textContent = '';
            }
        }

        function validateField(field) {
            var rule = rules[field.name];
            if (!rule) return true;
            var result = rule(field.value);
            if (result === true) {
                setFieldError(field, '');
                return true;
            }
            setFieldError(field, result);
            return false;
        }

        Object.keys(rules).forEach(function (name) {
            var field = form.elements[name];
            if (!field) return;
            field.addEventListener('blur', function () { validateField(field); });
        });

        form.addEventListener('submit', function (e) {
            var isValid = true;
            Object.keys(rules).forEach(function (name) {
                var field = form.elements[name];
                if (!field) return;
                if (!validateField(field)) isValid = false;
            });

            if (!isValid) {
                e.preventDefault();
                if (status) {
                    status.hidden = false;
                    status.className = 'form-status is-error';
                    status.textContent = 'Please fix the highlighted fields before sending.';
                }
                return;
            }

            // Let the form submit normally to the Laravel route.
            // If you'd rather submit via fetch() without a page reload,
            // preventDefault() here and POST to form.action with FormData.
            if (status) {
                status.hidden = false;
                status.className = 'form-status is-success';
                status.textContent = 'Sending your message…';
            }
        });
    }

    document.addEventListener('DOMContentLoaded', function () {
        initMobileMenu();
        initTerminal();
        initScrollReveal();
        initProjectFilter();
        initContactForm();
    });
})();
