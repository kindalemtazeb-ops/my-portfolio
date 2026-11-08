<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#080b10">
    <meta name="description" content="Meet Kindalem Tazeb, a third-year Computer Science student at Debark University and aspiring full-stack web developer from Ethiopia. Explore projects built with PHP, Laravel, MySQL, JavaScript, and Tailwind CSS.">
    <title>Kindalem Tazeb | Full-Stack Developer</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Mono:wght@400;500&family=Manrope:wght@400;500;600;700;800&family=Poppins:wght@500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="portfolio-page font-sans antialiased">
    <nav class="site-nav fixed inset-x-0 top-0 z-50 border-b" x-data="{ menuOpen: false }">
        <div class="mx-auto flex max-w-7xl items-center justify-between px-6 py-4 lg:px-10">
            <a href="#home" class="brand-lockup" aria-label="Kindalem Tazeb home">
                <span class="brand-monogram">KT</span>
                <span class="brand-identity"><strong>Kindalem Tazeb.</strong><small>Computer Science · Web Developer</small></span>
            </a>

            <div class="hidden items-center gap-4 xl:flex">
                <a class="nav-link" href="#about">About</a>
                <a class="nav-link" href="#services">Services</a>
                <a class="nav-link" href="#projects">Venture</a>
                <a class="nav-link" href="#skills">Skills</a>
                <a class="nav-link" href="#projects">Projects</a>
                <a class="nav-link" href="#contact">Contact</a>
            </div>

            <div class="hidden items-center gap-2 xl:flex">
                <a class="nav-cta nav-cta-github" href="https://github.com/kindalemtazeb-ops" target="_blank" rel="noopener noreferrer"><i class="fab fa-github"></i> GitHub</a>
                <a href="#about" class="nav-cta nav-cta-tlh" title="Computer Science at Debark University"><i class="fas fa-graduation-cap"></i> TLH</a>
                <a href="{{ asset('assets/Kindalem-Tazeb-CV.pdf') }}" class="nav-cta nav-cta-outline" download="Kindalem-Tazeb-CV.pdf"><i class="fas fa-download"></i> CV</a>
                <a href="#contact" class="nav-cta nav-cta-primary">Get in touch <i class="fas fa-arrow-up-right-from-square"></i></a>
                <a href="{{ route('login') }}" class="admin-link" aria-label="Admin login"><i class="fas fa-lock"></i></a>
            </div>

            <button type="button" class="menu-toggle xl:hidden" @click="menuOpen = !menuOpen" :aria-expanded="menuOpen.toString()" aria-label="Toggle navigation">
                <i class="fas" :class="menuOpen ? 'fa-xmark' : 'fa-bars'"></i>
            </button>
        </div>
        <div class="mobile-menu xl:hidden" x-show="menuOpen" x-cloak>
            <a href="#about" @click="menuOpen = false">About</a>
            <a href="#services" @click="menuOpen = false">Services</a>
            <a href="#projects" @click="menuOpen = false">Venture</a>
            <a href="#skills" @click="menuOpen = false">Skills</a>
            <a href="#projects" @click="menuOpen = false">Projects</a>
            <a href="#contact" @click="menuOpen = false">Contact</a>
            <a href="#about" title="Computer Science at Debark University" @click="menuOpen = false"><i class="fas fa-graduation-cap mr-2"></i>TLH</a>
            <a href="https://github.com/kindalemtazeb-ops" target="_blank" rel="noopener noreferrer"><i class="fab fa-github mr-2"></i>GitHub</a>
            <a href="{{ asset('assets/Kindalem-Tazeb-CV.pdf') }}" download="Kindalem-Tazeb-CV.pdf"><i class="fas fa-download mr-2"></i>Download CV</a>
            <a href="https://github.com/kindalemtazeb-ops" target="_blank" rel="noopener noreferrer">GitHub</a>
            <a href="{{ route('login') }}">Admin login</a>
        </div>
    </nav>

    <main>
        <section id="home" class="hero-section relative overflow-hidden">
            <div class="hero-glow hero-glow-one"></div>
            <div class="hero-glow hero-glow-two"></div>
            <div class="hero-glow hero-glow-three"></div>
            <div class="hero-grid"></div>
            <div class="relative mx-auto grid max-w-7xl items-center gap-14 px-6 pb-24 pt-36 lg:grid-cols-[1.05fr_.95fr] lg:px-10 lg:pb-32 lg:pt-44">
                <div class="hero-copy order-2 lg:order-1">
                    <div class="eyebrow"><span class="status-dot"></span> OPEN TO INTERNSHIPS & COLLABORATION</div>
                    <h1 class="hero-title"><span class="hero-greeting">Hi, I'm</span><span class="hero-name-accent">Kindalem</span><span class="hero-surname">Tazeb<span class="hero-period">.</span></span></h1>
                    <h2 class="hero-role">Full-Stack Web Developer<span class="role-cursor"></span></h2>
                    <p class="hero-description">
                        I'm a third-year Computer Science student at <strong>Debark University</strong>, Ethiopia. I build practical web applications from the database to the user interface, with a focus on <strong>PHP, Laravel, MySQL, JavaScript, and Tailwind CSS</strong>.
                    </p>

                    <div class="hero-actions">
                        <a href="#contact" class="button-primary">Get in touch <i class="fas fa-arrow-up-right-from-square"></i></a>
                        <a href="#projects" class="button-secondary">Explore my work <i class="fas fa-arrow-down"></i></a>
                        <a href="https://github.com/kindalemtazeb-ops" class="button-secondary button-github" target="_blank" rel="noopener noreferrer"><i class="fab fa-github"></i> View GitHub</a>
                    </div>

                    <div class="hero-socials">
                        <span class="social-caption">FIND ME ON</span>
                        <a href="https://github.com/kindalemtazeb-ops" target="_blank" rel="noopener noreferrer" aria-label="GitHub"><i class="fab fa-github"></i></a>
                        <a href="https://t.me/kindalemtazeb" target="_blank" rel="noopener noreferrer" aria-label="Telegram"><i class="fab fa-telegram"></i></a>
                        <a href="https://www.linkedin.com/in/kindalem-tazeb-dev/" target="_blank" rel="noopener noreferrer" aria-label="LinkedIn"><i class="fab fa-linkedin"></i></a>
                        <span class="social-divider"></span>
                        <span class="location-label"><i class="fas fa-location-dot"></i> Debark, Ethiopia</span>
                    </div>
                </div>

                <div class="hero-visual order-1 mx-auto w-full max-w-md lg:order-2">
                    <div class="portrait-frame">
                        <div class="portrait-topline"><span><i class="fas fa-circle"></i> <i class="fas fa-circle"></i> <i class="fas fa-circle"></i></span><span>kindalem.dev</span><i class="fas fa-ellipsis"></i></div>
                        <div class="portrait-image-wrap">
                            <img src="{{ asset('images/newportfolio.jpg') }}" alt="Kindalem Tazeb working on a laptop" class="portrait-image">
                            <div class="portrait-shade"></div>
                            <div class="portrait-label"><span class="status-dot"></span> Computer Science · Debark University</div>
                        </div>
                        <div class="code-float code-float-top"><span class="code-float-icon">&lt;/&gt;</span><span><small>MY STACK</small><strong>PHP · Laravel · MySQL</strong></span></div>
                        <div class="code-float code-float-bottom"><span class="status-dot"></span> Building useful things</div>
                    </div>
                    <div class="orbit orbit-one"></div>
                    <div class="orbit orbit-two"></div>
                </div>
            </div>
            <a href="#about" class="scroll-cue"><span></span> SCROLL TO EXPLORE</a>
        </section>

        <section id="about" class="section-shell about-section">
            <div class="mx-auto grid max-w-7xl gap-14 px-6 py-24 lg:grid-cols-[.8fr_1.2fr] lg:px-10 lg:py-32">
                <div>
                    <p class="section-index">01 / A LITTLE ABOUT ME</p>
                    <h2 class="section-title">Curious mind.<br><span>Practical builder.</span></h2>
                </div>
                <div class="about-content">
                    <p class="about-lead">I turn ideas into useful web applications, one thoughtful detail at a time.</p>
                    <p class="body-copy">I'm Kindalem Tazeb, a third-year Computer Science student at Debark University in Ethiopia and an aspiring full-stack web developer. I enjoy working across the whole process: understanding a problem, designing a clear and responsive interface, building the application logic, and connecting it to a well-organized database.</p>
                    <p class="body-copy">My current toolkit includes PHP and Laravel for backend development, MySQL for data, and JavaScript, HTML, CSS, and Tailwind CSS for the frontend. I've applied these skills to projects such as a banking management system and a student registration system. I'm continuing to grow through hands-on projects, learning new tools, and improving the quality of my code.</p>
                    <div class="about-facts">
                        <div><span class="fact-number">01</span><span>Computer Science<br>student</span></div>
                        <div><span class="fact-number">02</span><span>Full-stack<br>web development</span></div>
                        <div><span class="fact-number">03</span><span>Always learning<br>& building</span></div>
                    </div>
                    <div class="education-card">
                        <span class="education-icon"><i class="fas fa-graduation-cap"></i></span>
                        <div>
                            <span class="education-eyebrow">MY EDUCATION</span>
                            <h3>Computer Science</h3>
                            <p>Third-year student · Debark University</p>
                        </div>
                        <span class="education-location"><i class="fas fa-location-dot"></i> Ethiopia</span>
                    </div>
                </div>
            </div>
        </section>

        <section id="services" class="services-section section-shell">
            <div class="mx-auto max-w-7xl px-6 py-24 lg:px-10 lg:py-32">
                <div class="section-heading-row">
                    <div>
                        <p class="section-index">02 / WHAT I ENJOY BUILDING</p>
                        <h2 class="section-title">Ideas into <span>experiences.</span></h2>
                    </div>
                    <p class="section-aside">Practical web development, from the first layout<br class="hidden sm:block"> to the data and logic behind it.</p>
                </div>
                <div class="services-grid">
                    <article class="service-card">
                        <div class="service-topline"><span class="service-icon service-icon-backend"><i class="fas fa-server"></i></span><span class="service-number">01</span></div>
                        <h3>Backend applications</h3>
                        <p>Build structured application features with Laravel and PHP, including authentication, role-based access, and business logic.</p>
                        <div class="service-tags"><span>Laravel</span><span>PHP</span></div>
                    </article>
                    <article class="service-card">
                        <div class="service-topline"><span class="service-icon service-icon-frontend"><i class="fas fa-wand-magic-sparkles"></i></span><span class="service-number">02</span></div>
                        <h3>Responsive interfaces</h3>
                        <p>Turn product ideas into clear, mobile-friendly pages with careful layouts, accessible patterns, and purposeful interactions.</p>
                        <div class="service-tags"><span>Tailwind CSS</span><span>Vue.js</span></div>
                    </article>
                    <article class="service-card">
                        <div class="service-topline"><span class="service-icon service-icon-data"><i class="fas fa-database"></i></span><span class="service-number">03</span></div>
                        <h3>Data-driven systems</h3>
                        <p>Organize application data and connect it to useful flows such as registrations, account records, and management dashboards.</p>
                        <div class="service-tags"><span>MySQL</span><span>CRUD</span></div>
                    </article>
                    <article class="service-card">
                        <div class="service-topline"><span class="service-icon service-icon-fullstack"><i class="fas fa-layer-group"></i></span><span class="service-number">04</span></div>
                        <h3>End-to-end projects</h3>
                        <p>Connect frontend and backend into one coherent application, then improve it through testing and feedback.</p>
                        <div class="service-tags"><span>Full-stack</span><span>Git</span></div>
                    </article>
                </div>
            </div>
        </section>

        <section id="skills" class="skills-section">
            <div class="mx-auto max-w-7xl px-6 py-24 lg:px-10 lg:py-32">
                <div class="section-heading-row">
                    <div>
                        <p class="section-index">03 / TOOLS OF THE TRADE</p>
                        <h2 class="section-title">My tech <span>stack.</span></h2>
                    </div>
                    <p class="section-aside">The technologies I use to bring ideas<br class="hidden sm:block"> from a first sketch to a working product.</p>
                </div>
                <div class="stack-grid">
                    <article class="stack-card">
                        <div class="stack-icon stack-php"><i class="fab fa-php"></i></div>
                        <h3>Backend</h3>
                        <p>PHP · Laravel</p>
                        <span class="stack-note">Building the logic behind the app</span>
                    </article>
                    <article class="stack-card">
                        <div class="stack-icon stack-js"><i class="fab fa-js"></i></div>
                        <h3>Frontend</h3>
                        <p>JavaScript · Vue.js</p>
                        <span class="stack-note">Interactive, responsive experiences</span>
                    </article>
                    <article class="stack-card">
                        <div class="stack-icon stack-html"><i class="fab fa-html5"></i></div>
                        <h3>Web foundations</h3>
                        <p>HTML5 · CSS3 · Tailwind</p>
                        <span class="stack-note">Clean layouts and accessible UI</span>
                    </article>
                    <article class="stack-card">
                        <div class="stack-icon stack-db"><i class="fas fa-database"></i></div>
                        <h3>Data & workflow</h3>
                        <p>MySQL · Git · Composer</p>
                        <span class="stack-note">Organized data and reliable teamwork</span>
                    </article>
                </div>
                <div class="toolbelt">
                    <span class="toolbelt-label">ALSO IN MY TOOLKIT</span>
                    <span><i class="fas fa-terminal"></i> VS Code</span>
                    <span><i class="fab fa-node-js"></i> Node.js</span>
                    <span><i class="fas fa-paper-plane"></i> Postman</span>
                    <span><i class="fab fa-git-alt"></i> GitHub</span>
                </div>
            </div>
        </section>

        <section class="approach-section section-shell">
            <div class="mx-auto max-w-7xl px-6 py-24 lg:px-10 lg:py-32">
                <div class="section-heading-row">
                    <div>
                        <p class="section-index">04 / HOW I WORK</p>
                        <h2 class="section-title">A thoughtful way<br><span>to build.</span></h2>
                    </div>
                    <p class="section-aside">A simple process keeps each project focused,<br class="hidden sm:block"> understandable, and moving forward.</p>
                </div>
                <div class="approach-grid">
                    <article class="approach-card">
                        <span class="approach-step">STEP 01</span>
                        <span class="approach-icon"><i class="far fa-lightbulb"></i></span>
                        <h3>Understand</h3>
                        <p>Start with the problem, who the application is for, and what it needs to do.</p>
                    </article>
                    <article class="approach-card">
                        <span class="approach-step">STEP 02</span>
                        <span class="approach-icon"><i class="fas fa-list-check"></i></span>
                        <h3>Plan</h3>
                        <p>Break the work into clear interface, data, and application logic tasks.</p>
                    </article>
                    <article class="approach-card">
                        <span class="approach-step">STEP 03</span>
                        <span class="approach-icon"><i class="fas fa-code"></i></span>
                        <h3>Build</h3>
                        <p>Develop the features in small steps and keep the code organized as the app grows.</p>
                    </article>
                    <article class="approach-card">
                        <span class="approach-step">STEP 04</span>
                        <span class="approach-icon"><i class="fas fa-arrows-rotate"></i></span>
                        <h3>Refine</h3>
                        <p>Test the experience, fix issues, and improve the details that make the app easier to use.</p>
                    </article>
                </div>
            </div>
        </section>

        <section id="projects" class="section-shell projects-section">
            <div class="mx-auto max-w-7xl px-6 py-24 lg:px-10 lg:py-32">
                <div id="project-showcase"></div>
            </div>
        </section>

        <section id="contact" class="contact-section">
            <div class="contact-glow"></div>
            <div class="relative mx-auto grid max-w-7xl gap-14 px-6 py-24 lg:grid-cols-[.9fr_1.1fr] lg:px-10 lg:py-32">
                <div class="contact-copy">
                    <p class="section-index">06 / YOUR TURN</p>
                    <h2 class="section-title">Have an idea?<br><span>Let's build it.</span></h2>
                    <p class="body-copy">Have a project in mind, an internship opportunity, or just want to talk tech? Send me a message. I'd love to hear from you.</p>
                    <div class="contact-links">
                        <a class="contact-email" href="https://t.me/kindalemtazeb" target="_blank" rel="noopener noreferrer"><i class="fab fa-telegram"></i> Message me on Telegram <i class="fas fa-arrow-up-right-from-square"></i></a>
                        <a class="contact-email" href="https://www.linkedin.com/in/kindalem-tazeb-dev/" target="_blank" rel="noopener noreferrer"><i class="fab fa-linkedin"></i> Connect with me on LinkedIn <i class="fas fa-arrow-up-right-from-square"></i></a>
                    </div>
                </div>
                <div class="contact-form-wrap">
                    @if (session('success'))
                        <div class="form-notice form-success" role="status"><i class="fas fa-circle-check"></i> {{ session('success') }}</div>
                    @endif
                    @if ($errors->any())
                        <div class="form-notice form-error" role="alert">
                            <i class="fas fa-circle-exclamation"></i>
                            <span>{{ $errors->first() }}</span>
                        </div>
                    @endif
                    <form action="{{ route('contact.store') }}" method="POST" class="contact-form">
                        @csrf
                        <label for="name">Your name</label>
                        <input id="name" type="text" name="name" value="{{ old('name') }}" required maxlength="255" placeholder="How should I call you?">
                        <label for="email">Email address</label>
                        <input id="email" type="email" name="email" value="{{ old('email') }}" required placeholder="you@example.com">
                        <label for="message">Your message</label>
                        <textarea id="message" name="message" rows="4" required placeholder="Tell me a little about what you have in mind...">{{ old('message') }}</textarea>
                        <button type="submit" class="button-primary form-submit">Send a message <i class="fas fa-arrow-right"></i></button>
                    </form>
                </div>
            </div>
        </section>
    </main>

    <footer class="site-footer">
        <div class="mx-auto flex max-w-7xl flex-col items-center justify-between gap-5 px-6 py-7 sm:flex-row lg:px-10">
            <a href="#home" class="brand-mark"><span>&lt;</span>kindalem<span class="brand-dot">.</span><span>&gt;</span></a>
            <p>Designed & built by Kindalem Tazeb <span class="footer-heart">♥</span> 2026</p>
            <a href="https://github.com/kindalemtazeb-ops" target="_blank" rel="noopener noreferrer" class="footer-github"><i class="fab fa-github"></i> GitHub</a>
        </div>
    </footer>
</body>
</html>
