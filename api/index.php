<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Imane Mkadem | Portfolio</title>

    <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            scroll-behavior: smooth;
        }

        body {
            font-family: Arial, sans-serif;
            background: #0f172a;
            color: white;
            line-height: 1.6;
        }

        /* ================= NAVBAR ================= */

        nav {
            position: fixed;
            top: 0;
            width: 100%;
            padding: 20px 8%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: rgba(15, 23, 42, 0.95);
            border-bottom: 1px solid #1e293b;
            z-index: 1000;
        }

        .logo {
            font-size: 25px;
            font-weight: bold;
            color: #38bdf8;
        }

        nav ul {
            list-style: none;
            display: flex;
            gap: 30px;
        }

        nav a {
            text-decoration: none;
            color: white;
            font-weight: bold;
            transition: 0.3s;
        }

        nav a:hover {
            color: #38bdf8;
        }

        /* ================= SECTIONS ================= */

        section {
            min-height: 100vh;
            padding: 120px 8% 70px;
        }

        .container {
            max-width: 1100px;
            margin: auto;
        }

        /* ================= HOME ================= */

        #home {
            display: flex;
            align-items: center;
        }

        .home-content {
            max-width: 750px;
        }

        .hello {
            color: #38bdf8;
            font-size: 20px;
            margin-bottom: 10px;
        }

        h1 {
            font-size: 60px;
            margin-bottom: 10px;
        }

        h1 span {
            color: #38bdf8;
        }

        .job {
            font-size: 28px;
            color: #cbd5e1;
            margin-bottom: 20px;
        }

        .description {
            color: #94a3b8;
            font-size: 18px;
            margin-bottom: 30px;
            max-width: 650px;
        }

        .btn {
            display: inline-block;
            padding: 13px 25px;
            background: #38bdf8;
            color: #0f172a;
            text-decoration: none;
            border-radius: 8px;
            font-weight: bold;
            transition: 0.3s;
        }

        .btn:hover {
            transform: translateY(-4px);
            background: #7dd3fc;
        }

        /* ================= TITLES ================= */

        .section-title {
            text-align: center;
            font-size: 40px;
            margin-bottom: 50px;
        }

        .section-title span {
            color: #38bdf8;
        }

        /* ================= ABOUT ================= */

        #about {
            background: #111827;
        }

        .about-box {
            display: grid;
            grid-template-columns: 1fr 2fr;
            gap: 40px;
            align-items: center;
        }

        .profile {
            width: 230px;
            height: 230px;
            border-radius: 50%;
            object-fit: cover;
            border: 4px solid #38bdf8;
            display: block;
            margin: auto;
        }

        .about-text {
            color: #cbd5e1;
            font-size: 18px;
        }

        /* ================= SKILLS ================= */

        .skills {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
        }

        .skill {
            background: #1e293b;
            padding: 25px;
            border-radius: 12px;
            text-align: center;
            transition: 0.3s;
        }

        .skill:hover {
            transform: translateY(-8px);
        }

        .skill h3 {
            color: #38bdf8;
            margin-bottom: 10px;
        }

        .skill p {
            color: #cbd5e1;
        }

        /* ================= PROJECTS ================= */

        #projects {
            background: #0f172a;
        }

        .projects {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 30px;
        }

        .project {
            background: #1e293b;
            border-radius: 15px;
            overflow: hidden;
            transition: 0.3s;
        }

        .project:hover {
            transform: translateY(-8px);
        }

        .project-image {
            width: 100%;
            height: 220px;
            object-fit: cover;
            display: block;
        }

        .project-content {
            padding: 25px;
        }

        .project h3 {
            color: #38bdf8;
            font-size: 24px;
            margin-bottom: 10px;
        }

        .project p {
            color: #cbd5e1;
            margin-bottom: 15px;
        }

        .technologies {
            color: #7dd3fc;
            margin-bottom: 20px;
            font-size: 14px;
        }

        /* ================= CONTACT ================= */

        #contact {
            background: #111827;
            text-align: center;
        }

        .contact-text {
            color: #cbd5e1;
            font-size: 18px;
            margin-bottom: 25px;
        }

        .email {
            color: #38bdf8;
            font-size: 20px;
            font-weight: bold;
        }

        /* ================= FOOTER ================= */

        footer {
            background: #020617;
            padding: 25px;
            text-align: center;
            color: #94a3b8;
        }

        /* ================= RESPONSIVE ================= */

        @media (max-width: 768px) {

            nav {
                padding: 15px 5%;
            }

            nav ul {
                gap: 10px;
                font-size: 12px;
            }

            h1 {
                font-size: 42px;
            }

            .job {
                font-size: 22px;
            }

            .about-box {
                grid-template-columns: 1fr;
                text-align: center;
            }

            .skills,
            .projects {
                grid-template-columns: 1fr;
            }

        }

    </style>

</head>

<body>


<!-- ================= NAVBAR ================= -->

<nav>

    <div class="logo">
        IMANE.
    </div>

    <ul>

        <li>
            <a href="#home">Accueil</a>
        </li>

        <li>
            <a href="#about">À propos</a>
        </li>

        <li>
            <a href="#skills">Compétences</a>
        </li>

        <li>
            <a href="#projects">Projets</a>
        </li>

        <li>
            <a href="#contact">Contact</a>
        </li>

    </ul>

</nav>


<!-- ================= HOME ================= -->

<section id="home">

    <div class="container">

        <div class="home-content">

            <p class="hello">
                Bonjour, je suis
            </p>

            <h1>
                Imane <span>M'kadem</span>
            </h1>

            <p class="job">
                Développeuse Web Junior
            </p>

            <p class="description">
                Étudiante en développement digital,
                passionnée par la création de sites web
                modernes, interactifs et fonctionnels.
            </p>

            <a href="#projects" class="btn">
                Découvrir mes projets
            </a>

        </div>

    </div>

</section>


<!-- ================= ABOUT ================= -->

<section id="about">

    <div class="container">

        <h2 class="section-title">
            À <span>propos</span>
        </h2>

        <div class="about-box">

            <img
                src="/images/Profil.jpeg"
                alt="Photo de Imane"
                class="profile"
            >

            <div class="about-text">

                <p>
                    Je suis Imane M'kadem, stagiaire dans
                    le domaine du développement digital.
                </p>

                <br>

                <p>
                    Je m'intéresse au développement web,
                    à la programmation et à la création
                    d'applications modernes.
                </p>

                <br>

                <p>
                    Mon objectif est de continuer à développer
                    mes compétences et de créer des projets
                    utiles et professionnels.
                </p>

            </div>

        </div>

    </div>

</section>


<!-- ================= SKILLS ================= -->

<section id="skills">

    <div class="container">

        <h2 class="section-title">
            Mes <span>compétences</span>
        </h2>

        <div class="skills">

            <div class="skill">
                <h3>HTML</h3>
                <p>Création de structures web.</p>
            </div>

            <div class="skill">
                <h3>CSS</h3>
                <p>Design et responsive.</p>
            </div>

            <div class="skill">
                <h3>JavaScript</h3>
                <p>Interactions et fonctionnalités.</p>
            </div>

            <div class="skill">
                <h3>PHP</h3>
                <p>Développement côté serveur.</p>
            </div>

            <div class="skill">
                <h3>MySQL</h3>
                <p>Gestion des bases de données.</p>
            </div>

            <div class="skill">
                <h3>Git & GitHub</h3>
                <p>Gestion des versions.</p>
            </div>

        </div>

    </div>

</section>


<!-- ================= PROJECTS ================= -->

<section id="projects">

    <div class="container">

        <h2 class="section-title">
            Mes <span>projets</span>
        </h2>

        <div class="projects">


            <!-- ================= TPs ================= -->

            <div class="project">

                <img
                    src="../public/images/tp.jpg"
                    alt="Travaux pratiques"
                    class="project-image"
                >

                <div class="project-content">

                    <h3>
                        Travaux Pratiques
                    </h3>

                    <p>
                        Découvrez mes travaux pratiques réalisés
                        durant ma formation en Développement Digital
                        option Web Full Stack.
                    </p>

                    <div class="technologies">
                        M201 • M202 • M203 • M204 • M205 • M206
                    </div>

                    <a href="modules.php" class="btn">
                        Voir les modules
                    </a>

                </div>

            </div>


            <!-- ================= CHRIWBI3 ================= -->

            <div class="project">

                <img
                    src="../public/images/chriwbie.jpeg"
                    alt="Projet ChriWbi3"
                    class="project-image"
                >

                <div class="project-content">

                    <h3>
                        ChriWbi3
                    </h3>

                    <p>
                        Plateforme web dédiée à la publication
                        et à la consultation d'annonces.
                    </p>

                    <div class="technologies">
                        HTML • CSS • PHP • MySQL • JavaScript
                    </div>

                    <a href="modules.php" class="btn">
                        Voir le projet
                    </a>

                </div>

            </div>


            <!-- ================= PROJECT 3 ================= -->

            <div class="project">

                <img
                    src="../public/images/project3.png"
                    alt="Projet à venir"
                    class="project-image"
                >

                <div class="project-content">

                    <h3>
                        Projet à venir
                    </h3>

                    <p>
                        Un nouveau projet sera ajouté
                        prochainement.
                    </p>

                    <div class="technologies">
                        Web Development
                    </div>

                    <a href="modules.php" class="btn">
                        Voir le projet
                    </a>

                </div>

            </div>


        </div>

    </div>

</section>


<!-- ================= CONTACT ================= -->

<section id="contact">

    <div class="container">

        <h2 class="section-title">
            Me <span>contacter</span>
        </h2>

        <p class="contact-text">
            Vous souhaitez me contacter ?
        </p>

        <p class="email">
            mkademimane18@gmail.com
        </p>

    </div>

</section>


<!-- ================= FOOTER ================= -->

<footer>

    © 2026 Imane Mkadem — Portfolio

</footer>


</body>

</html>