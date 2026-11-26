
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Portfolio de Imane M'kadem - Développeuse Web Junior">
<title>Imane M'kadem | Portfolio</title>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700;800&family=Outfit:wght@400;500;600;700;800&display=swap" rel="stylesheet">

<style>
:root {
    --bg: #080e1c;
    --bg2: #0d172a;
    --card: #111e33;
    --blue: #38bdf8;
    --purple: #818cf8;
    --white: #f8fafc;
    --muted: #94a3b8;
    --border: rgba(148,163,184,.13);
}

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    scroll-behavior: smooth;
}

body {
    font-family: 'DM Sans', sans-serif;
    background: var(--bg);
    color: var(--white);
    overflow-x: hidden;
}

a { text-decoration: none; color: inherit; }

.container {
    max-width: 1150px;
    width: 85%;
    margin: auto;
}

/* BACKGROUND */

body::before {
    content: "";
    position: fixed;
    width: 500px;
    height: 500px;
    background: var(--blue);
    filter: blur(180px);
    opacity: .09;
    top: -200px;
    right: -150px;
    pointer-events: none;
    z-index: -1;
}

body::after {
    content: "";
    position: fixed;
    width: 400px;
    height: 400px;
    background: var(--purple);
    filter: blur(180px);
    opacity: .08;
    bottom: -200px;
    left: -150px;
    pointer-events: none;
    z-index: -1;
}

/* NAVBAR */

nav {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    padding: 20px 7.5%;
    display: flex;
    justify-content: space-between;
    align-items: center;
    background: rgba(8,14,28,.82);
    backdrop-filter: blur(18px);
    border-bottom: 1px solid var(--border);
    z-index: 1000;
}

.logo {
    font-family: 'Outfit', sans-serif;
    font-size: 26px;
    font-weight: 800;
    letter-spacing: -1px;
}

.logo span { color: var(--blue); }

nav ul {
    display: flex;
    gap: 30px;
    list-style: none;
}

nav ul a {
    color: var(--muted);
    font-size: 14px;
    font-weight: 600;
    transition: .3s;
}

nav ul a:hover,
nav ul a.active {
    color: var(--blue);
}

.nav-cv {
    padding: 10px 19px;
    border: 1px solid var(--blue);
    border-radius: 8px;
    color: var(--blue);
    font-size: 13px;
    font-weight: 700;
    transition: .3s;
}

.nav-cv:hover {
    background: var(--blue);
    color: var(--bg);
}

/* HERO */

#home {
    min-height: 100vh;
    display: flex;
    align-items: center;
    padding: 140px 0 80px;
}

.hero-content {
    animation: appear 1s ease both;
}

.hero-tag {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    padding: 9px 16px;
    border: 1px solid var(--border);
    background: rgba(56,189,248,.06);
    border-radius: 30px;
    color: var(--blue);
    font-size: 13px;
    margin-bottom: 25px;
}

.dot {
    width: 8px;
    height: 8px;
    background: #4ade80;
    border-radius: 50%;
    box-shadow: 0 0 12px #4ade80;
}

.hero-content h1 {
    font-family: 'Outfit', sans-serif;
    font-size: clamp(45px, 7vw, 82px);
    line-height: 1.1;
    letter-spacing: -3px;
    margin-bottom: 15px;
}

.gradient-text {
    background: linear-gradient(90deg, var(--blue), var(--purple));
    -webkit-background-clip: text;
    background-clip: text;
    color: transparent;
}

.hero-job {
    color: #cbd5e1;
    font-size: clamp(19px, 3vw, 27px);
    font-weight: 600;
    margin-bottom: 25px;
}

.hero-description {
    max-width: 650px;
    color: var(--muted);
    font-size: 17px;
    line-height: 1.9;
    margin-bottom: 35px;
}

.hero-buttons {
    display: flex;
    gap: 15px;
    flex-wrap: wrap;
}

.btn {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 10px;
    padding: 14px 24px;
    border-radius: 9px;
    font-size: 14px;
    font-weight: 700;
    transition: .3s;
}

.btn-primary {
    background: linear-gradient(100deg, var(--blue), var(--purple));
    color: #080e1c;
}

.btn-primary:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 30px rgba(56,189,248,.2);
}

.btn-outline {
    border: 1px solid var(--border);
    color: white;
}

.btn-outline:hover {
    border-color: var(--blue);
    color: var(--blue);
    transform: translateY(-5px);
}

.hero-bottom {
    margin-top: 75px;
    display: flex;
    gap: 55px;
    flex-wrap: wrap;
}

.hero-stat h3 {
    font-family: 'Outfit', sans-serif;
    font-size: 28px;
    color: var(--blue);
}

.hero-stat p {
    color: var(--muted);
    font-size: 13px;
}

/* SECTIONS */

section:not(#home) {
    padding: 110px 0;
}

.section-label {
    color: var(--blue);
    text-transform: uppercase;
    letter-spacing: 3px;
    font-size: 12px;
    font-weight: 700;
    margin-bottom: 12px;
    text-align: center;
}

.section-title {
    font-family: 'Outfit', sans-serif;
    font-size: clamp(32px, 5vw, 46px);
    text-align: center;
    margin-bottom: 18px;
}

.section-title span { color: var(--blue); }

.section-description {
    color: var(--muted);
    text-align: center;
    max-width: 600px;
    margin: 0 auto 55px;
    line-height: 1.8;
}

/* ABOUT */

#about {
    background: rgba(17,30,51,.45);
    border-top: 1px solid var(--border);
    border-bottom: 1px solid var(--border);
}

.about-grid {
    display: grid;
    grid-template-columns: .8fr 1.5fr;
    gap: 65px;
    align-items: center;
}

.profile-box {
    position: relative;
    max-width: 300px;
    margin: auto;
}

.profile {
    width: 100%;
    aspect-ratio: 1;
    object-fit: cover;
    border-radius: 25px;
    border: 2px solid rgba(56,189,248,.5);
    box-shadow: 15px 15px 0 rgba(56,189,248,.08);
}

.about-text h3 {
    font-family: 'Outfit', sans-serif;
    font-size: 28px;
    margin-bottom: 20px;
}

.about-text p {
    color: var(--muted);
    line-height: 1.9;
    margin-bottom: 16px;
}

.about-info {
    display: flex;
    gap: 25px;
    flex-wrap: wrap;
    margin-top: 25px;
}

.info-item {
    color: var(--muted);
    font-size: 14px;
}

.info-item strong { color: var(--blue); }

/* SKILLS */

.skills-grid {
    display: grid;
    grid-template-columns: repeat(3,1fr);
    gap: 20px;
}

.skill {
    background: var(--card);
    border: 1px solid var(--border);
    padding: 27px;
    border-radius: 15px;
    transition: .35s;
}

.skill:hover {
    transform: translateY(-8px);
    border-color: var(--blue);
    box-shadow: 0 15px 35px rgba(0,0,0,.2);
}

.skill-icon {
    font-size: 28px;
    margin-bottom: 18px;
}

.skill h3 {
    color: var(--white);
    font-size: 17px;
    margin-bottom: 10px;
}

.skill p {
    color: var(--muted);
    font-size: 14px;
    line-height: 1.7;
}

/* PROJECTS */

#projects {
    background: rgba(17,30,51,.35);
    border-top: 1px solid var(--border);
}

.projects-grid {
    display: grid;
    grid-template-columns: repeat(2,1fr);
    gap: 25px;
}

.project {
    background: var(--card);
    border: 1px solid var(--border);
    border-radius: 16px;
    overflow: hidden;
    transition: .35s;
}

.project:hover {
    transform: translateY(-8px);
    border-color: rgba(56,189,248,.6);
}

.project-image {
    width: 100%;
    height: 235px;
    object-fit: cover;
    display: block;
    transition: .5s;
}

.project:hover .project-image {
    transform: scale(1.04);
}

.project-content { padding: 25px; }

.project h3 {
    font-family: 'Outfit', sans-serif;
    font-size: 23px;
    margin-bottom: 12px;
}

.project p {
    color: var(--muted);
    font-size: 14px;
    line-height: 1.8;
    margin-bottom: 18px;
}

.technologies {
    color: var(--blue);
    font-size: 12px;
    margin-bottom: 22px;
    font-weight: 600;
}

/* CV */

#cv {
    text-align: center;
}

.cv-card {
    max-width: 800px;
    margin: auto;
    padding: 55px 35px;
    border: 1px solid rgba(56,189,248,.25);
    border-radius: 22px;
    background: linear-gradient(135deg, rgba(56,189,248,.10), rgba(129,140,248,.09));
    position: relative;
    overflow: hidden;
}

.cv-icon {
    font-size: 55px;
    margin-bottom: 20px;
}

.cv-card h3 {
    font-family: 'Outfit', sans-serif;
    font-size: 30px;
    margin-bottom: 15px;
}

.cv-card p {
    color: var(--muted);
    line-height: 1.8;
    max-width: 520px;
    margin: 0 auto 28px;
}

/* CONTACT */

#contact {
    background: rgba(17,30,51,.45);
    border-top: 1px solid var(--border);
}

.contact-card {
    text-align: center;
    padding: 40px 20px;
}

.contact-card p {
    color: var(--muted);
    margin-bottom: 25px;
}

.email {
    color: var(--blue);
    font-size: clamp(17px, 3vw, 23px);
    font-weight: 700;
    display: inline-block;
    margin-bottom: 30px;
}

.social-links {
    display: flex;
    justify-content: center;
    gap: 15px;
    flex-wrap: wrap;
}

.social-links a {
    padding: 11px 20px;
    border: 1px solid var(--border);
    border-radius: 8px;
    font-size: 14px;
    transition: .3s;
}

.social-links a:hover {
    border-color: var(--blue);
    color: var(--blue);
}

/* FOOTER */

footer {
    background: #050a14;
    padding: 25px;
    text-align: center;
    color: var(--muted);
    font-size: 13px;
    border-top: 1px solid var(--border);
}

/* ANIMATIONS */

@keyframes appear {
    from {
        opacity: 0;
        transform: translateY(35px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.reveal {
    opacity: 0;
    transform: translateY(35px);
    transition: opacity .8s ease, transform .8s ease;
}

.reveal.show {
    opacity: 1;
    transform: translateY(0);
}

/* RESPONSIVE */
@media(max-width: 850px) {
    #certifications .skills-grid {
        grid-template-columns: repeat(2, 1fr);
    }
}
@media(max-width: 600px) {
    #certifications .skills-grid {
        grid-template-columns: 1fr;
    }

    #certifications .skill {
        padding: 22px;
    }

    #certifications .skill h3 {
        font-size: 16px;
    }

    #certifications .skill p {
        font-size: 13px;
    }
}
#certifications {
    background: rgba(17,30,51,.35);
    border-top: 1px solid var(--border);
}

@media(max-width: 850px) {
    nav { padding: 17px 5%; }
    nav ul { gap: 14px; }
    .container { width: 90%; }
    .about-grid { grid-template-columns: 1fr; gap: 40px; }
    .skills-grid { grid-template-columns: repeat(2,1fr); }
}

@media(max-width: 600px) {
    nav {
        flex-wrap: wrap;
        gap: 15px;
        justify-content: center;
    }

    nav ul {
        order: 3;
        width: 100%;
        justify-content: center;
        gap: 13px;
    }

    nav ul a { font-size: 11px; }
    .nav-cv { font-size: 11px; padding: 8px 12px; }

    #home { padding-top: 170px; }
    .hero-content h1 { letter-spacing: -2px; }
    .hero-bottom { gap: 25px; }
    .skills-grid, .projects-grid { grid-template-columns: 1fr; }
    section:not(#home) { padding: 80px 0; }
    .project-image { height: 200px; }
    .cv-card { padding: 40px 20px; }

}
</style>
</head>

<body>

<!-- NAVBAR -->
<nav>
    <a href="#home" class="logo">IMANE<span>.</span></a>

    <ul>
        <li><a href="#home">Accueil</a></li>
        <li><a href="#about">À propos</a></li>
        <li><a href="#skills">Compétences</a></li>
        <li><a href="#certifications">Certifications</a></li>
        <li><a href="#projects">Projets</a></li>
        <li><a href="#contact">Contact</a></li>
    </ul>

    <a href="../public/docs/CV-Imane-Mkadem.pdf" class="nav-cv" download>Mon CV ↗</a>
</nav>

<!-- HOME -->
<section id="home">
    <div class="container">
        <div class="hero-content">

            <div class="hero-tag">
                <span class="dot"></span>
                Étudiante en Développement Digital
            </div>

            <h1>
                Bonjour, je suis<br>
                Imane <span class="gradient-text">M'kadem.</span>
            </h1>

            <p class="hero-job">Développeuse Web Junior | Full Stack</p>

            <p class="hero-description">
                Je transforme mes idées en expériences web modernes.
                Passionnée par le développement, la technologie et
                la création de solutions digitales utiles et intuitives.
            </p>

            <div class="hero-buttons">
                <a href="#projects" class="btn btn-primary">
                    Découvrir mes projets →
                </a>

                <a href="#contact" class="btn btn-outline">
                    Me contacter
                </a>
            </div>

            <div class="hero-bottom">
                <div class="hero-stat">
                    <h3>06+</h3>
                    <p>Technologies maîtrisées</p>
                </div>

                <div class="hero-stat">
                    <h3>03+</h3>
                    <p>Projets & réalisations</p>
                </div>

                <div class="hero-stat">
                    <h3>2027</h3>
                    <p>Diplôme prévu</p>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- ABOUT -->
<section id="about">
    <div class="container">

        <p class="section-label">Qui suis-je ?</p>
        <h2 class="section-title">À <span>propos de moi</span></h2>

        <div class="about-grid reveal">

            <div class="profile-box">
                <img src="../public/images/Profil.jpeg"
                     alt="Photo de Imane M'kadem"
                     class="profile">
            </div>

            <div class="about-text">
                <h3>Créative, curieuse & passionnée.</h3>

                <p>
                    Je suis Imane M'kadem, étudiante en deuxième année
                    de Développement Digital, option Développement Web
                    Full Stack à l'OFPPT / NTIC Tanger.
                </p>

                <p>
                    Je m'intéresse au développement Front-End et
                    Back-End, à la programmation et à la conception
                    d'applications web modernes.
                </p>

                <p>
                    Mon objectif est de renforcer mes compétences
                    techniques, de participer à des projets innovants
                    et d'évoluer en tant que développeuse Full Stack.
                </p>

                <div class="about-info">
                    <div class="info-item">
                        <strong>Formation :</strong> OFPPT
                    </div>
                    <div class="info-item">
                        <strong>Ville :</strong> Tanger, Maroc
                    </div>
                    <div class="info-item">
                        <strong>Spécialité :</strong> Web Full Stack
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- SKILLS -->
<section id="skills">
    <div class="container">

        <p class="section-label">Mon savoir-faire</p>
        <h2 class="section-title">Mes <span>compétences</span></h2>

        <p class="section-description">
            Les technologies et outils que j'utilise dans mes projets
            et durant ma formation.
        </p>

        <div class="skills-grid">

            <div class="skill reveal">
                <div class="skill-icon">🌐</div>
                <h3>HTML5</h3>
                <p>Structure et organisation de pages web modernes.</p>
            </div>

            <div class="skill reveal">
                <div class="skill-icon">🎨</div>
                <h3>CSS3</h3>
                <p>Design, animations et interfaces responsive.</p>
            </div>

            <div class="skill reveal">
                <div class="skill-icon">⚡</div>
                <h3>JavaScript</h3>
                <p>Interactions et fonctionnalités dynamiques.</p>
            </div>

            <div class="skill reveal">
                <div class="skill-icon">🐘</div>
                <h3>PHP</h3>
                <p>Développement Back-End et logique serveur.</p>
            </div>

            <div class="skill reveal">
                <div class="skill-icon">🗄️</div>
                <h3>MySQL</h3>
                <p>Conception et gestion des bases de données.</p>
            </div>

            <div class="skill reveal">
                <div class="skill-icon">🔧</div>
                <h3>Git & GitHub</h3>
                <p>Gestion de versions et collaboration.</p>
            </div>

            <div class="skill reveal">
                <div class="skill-icon">🐍</div>
                <h3>Python</h3>
                <p>Programmation et bases du développement.</p>
            </div>

            <div class="skill reveal">
                <div class="skill-icon">💻</div>
                <h3>VS Code</h3>
                <p>Environnement de développement.</p>
            </div>

            <div class="skill reveal">
                <div class="skill-icon">📋</div>
                <h3>Jira</h3>
                <p>Organisation et suivi des projets.</p>
            </div>

        </div>
    </div>

<!-- CERTIFICATIONS -->
<section id="certifications">
    <div class="container">

        <p class="section-label">Mes formations complémentaires</p>
        <h2 class="section-title">
            Mes <span>certifications</span>
        </h2>

        <p class="section-description">
            Des certifications qui renforcent mes compétences
            en intelligence artificielle, design et gestion de projets.
        </p>

        <div class="skills-grid">

            <div class="skill reveal">
                <div class="skill-icon">🤖</div>
                <h3>Google AI Professional</h3>
                <p>Google / Coursera</p>
                <p>Intelligence artificielle et utilisation des outils IA.</p>
            </div>

            <div class="skill reveal">
                <div class="skill-icon">🎨</div>
                <h3>Creative Design Tools</h3>
                <p>Adobe / Coursera</p>
                <p>Création graphique et outils de design digital.</p>
            </div>

            <div class="skill reveal">
                <div class="skill-icon">📊</div>
                <h3>Business Analysis & Process Management</h3>
                <p>Coursera</p>
                <p>Analyse métier et gestion des processus.</p>
            </div>

            <div class="skill reveal">
                <div class="skill-icon">📋</div>
                <h3>Asana Foundations Skill Badge</h3>
                <p>Asana</p>
                <p>Organisation des tâches et gestion collaborative des projets.</p>
            </div>

        </div>
    </div>
</section>

</section>

<!-- PROJECTS -->
<section id="projects">
    <div class="container">

        <p class="section-label">Ce que je réalise</p>
        <h2 class="section-title">Mes <span>projets</span></h2>

        <p class="section-description">
            Quelques réalisations issues de ma formation
            et de mon parcours personnel.
        </p>

        <div class="projects-grid">

            <div class="project reveal">
                <img src="../public/images/chriwbie.jpeg"
                     alt="Projet Chriwbi3"
                     class="project-image">

                <div class="project-content">
                    <h3>Chriwbi3</h3>

                    <p>
                        Plateforme web dédiée à la publication,
                        la gestion et la consultation d'annonces.
                    </p>

                    <div class="technologies">
                        HTML • CSS • PHP • MySQL • JavaScript
                    </div>

                    <a href="https://chriwbie-en-clic.vercel.app/"
                       target="_blank" rel="noopener"
                       class="btn btn-primary">
                        Voir le projet ↗
                    </a>
                </div>
            </div>

            <div class="project reveal">
                <img src="../public/images/tp.jpg"
                     alt="Travaux pratiques"
                     class="project-image">

                <div class="project-content">
                    <h3>Travaux Pratiques</h3>

                    <p>
                        Découvrez mes exercices et travaux pratiques
                        réalisés durant ma formation en Développement
                        Digital Web Full Stack.
                    </p>

                    <div class="technologies">
                        M201 • M202 • M203 • M204 • M205 • M206
                    </div>

                    <a href="modules.php" class="btn btn-primary">
                        Voir les modules →
                    </a>
                </div>
            </div>

            <div class="project reveal">
                <img src="../public/images/project3.png"
                     alt="Projet à venir"
                     class="project-image">

                <div class="project-content">
                    <h3>Projet à venir</h3>

                    <p>
                        De nouvelles idées et réalisations seront
                        bientôt présentées dans mon portfolio.
                    </p>

                    <div class="technologies">
                        Web Development
                    </div>

                    <a href="#contact" class="btn btn-outline">
                        En savoir plus →
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- CV -->
<section id="cv">
    <div class="container">

        <p class="section-label">Mon parcours professionnel</p>
        <h2 class="section-title">Mon <span>Curriculum Vitae</span></h2>

        <p class="section-description">
            Découvrez mon parcours académique, mes compétences,
            mes expériences et mes réalisations.
        </p>

        <div class="cv-card reveal">
            <div class="cv-icon">📄</div>

            <h3>Envie d'en savoir plus sur mon profil ?</h3>

            <p>
                Consultez mon CV pour découvrir mon parcours
                et mes compétences, ou téléchargez-le au format PDF.
            </p>

            <div class="hero-buttons" style="justify-content:center;">

                <a href="../public/docs/CV.pdf"
                   target="_blank"
                   class="btn btn-primary">
                    Voir mon CV ↗
                </a>

                <a href="../public/docs/CV.pdf"
                   download
                   class="btn btn-outline">
                    Télécharger mon CV ↓
                </a>

            </div>
        </div>

    </div>
</section>

<!-- CONTACT -->
<section id="contact">
    <div class="container">

        <p class="section-label">Restons en contact</p>
        <h2 class="section-title">Me <span>contacter</span></h2>

        <div class="contact-card">
            <p>
                Vous avez une opportunité, un projet ou une proposition
                de collaboration ? N'hésitez pas à me contacter.
            </p>

            <a href="mailto:mkademimane18@gmail.com" class="email">
                mkademimane18@gmail.com
            </a>

            <div class="social-links">
                <a href="https://www.linkedin.com/in/imane-mkadem-148a8b3a1" target="_blank"
                   rel="noopener">LinkedIn ↗</a>

                <a href="https://github.com/mkademimane18-ctr"
                   target="_blank" rel="noopener">GitHub ↗</a>

                <a href="mailto:mkademimane18@gmail.com">
                    Email ↗
                </a>
            </div>
        </div>

    </div>
</section>

<!-- FOOTER -->
<footer>
    © 2026 Imane M'kadem — Designed & Developed with ❤️
</footer>

<!-- SCROLL ANIMATION -->
<script>
const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('show');
            observer.unobserve(entry.target);
        }
    });
}, {
    threshold: 0.12
});

document.querySelectorAll('.reveal').forEach(element => {
    observer.observe(element);
});

// Active navigation link
const sections = document.querySelectorAll('section[id]');
const navLinks = document.querySelectorAll('nav ul a');

window.addEventListener('scroll', () => {
    let current = '';

    sections.forEach(section => {
        const sectionTop = section.offsetTop - 150;

        if (window.scrollY >= sectionTop) {
            current = section.getAttribute('id');
        }
    });

    navLinks.forEach(link => {
        link.classList.remove('active');

        if (link.getAttribute('href') === '#' + current) {
            link.classList.add('active');
        }
    });
});
</script>

</body>
</html>
