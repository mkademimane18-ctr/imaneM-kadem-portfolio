
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Mes TPs - Imane Mkadem</title>

    <style>

        /* ================= GENERAL ================= */

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: "Segoe UI", Arial, sans-serif;
            background: #eef2ff;
            color: #1e293b;
            min-height: 100vh;
        }

        header {
            background: #ffffff;
            padding: 25px 8%;
            box-shadow: 0 2px 10px rgba(0,0,0,0.08);
        }

        header h1 {
            color: #4f46e5;
            margin-bottom: 5px;
        }

        header p {
            color: #64748b;
        }

        .container {
            width: 85%;
            max-width: 1000px;
            margin: 50px auto;
        }

        .back {
            display: inline-block;
            margin-bottom: 25px;
            text-decoration: none;
            color: #4f46e5;
            font-weight: 600;
        }

        .title {
            text-align: center;
            margin-bottom: 35px;
        }

        .title h2 {
            font-size: 32px;
            margin-bottom: 10px;
        }

        .title p {
            color: #64748b;
        }

        /* ================= CATEGORY ================= */

        .categories {
            display: grid;
            grid-template-columns: 1fr;
            gap: 25px;
        }

        .category-card {
            background: white;
            padding: 35px 30px;
            border-radius: 18px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.08);
            text-align: center;
            cursor: pointer;
            transition: 0.3s;
        }

        .category-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.12);
        }

        .category-icon {
            font-size: 55px;
            margin-bottom: 15px;
        }

        .category-card h3 {
            font-size: 25px;
            margin-bottom: 10px;
        }

        .category-card p {
            color: #64748b;
            line-height: 1.6;
        }

        /* ================= CONTENT ================= */

        .content-section {
            display: none;
        }

        .content-section.active {
            display: block;
        }

        .section-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 25px;
        }

        .section-header h2 {
            color: #4f46e5;
        }

        .back-category {
            border: none;
            background: #e2e8f0;
            color: #1e293b;
            padding: 10px 16px;
            border-radius: 8px;
            cursor: pointer;
            font-weight: 600;
        }

        .back-category:hover {
            background: #cbd5e1;
        }

        /* ================= TP CARDS ================= */

        .tp-list {
            display: grid;
            gap: 20px;
        }

        .tp-card {
            background: white;
            padding: 25px;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.08);
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 20px;
            transition: 0.3s;
        }

        .tp-card:hover {
            transform: translateY(-3px);
        }

        .tp-info {
            flex: 1;
        }

        .tp-info h3 {
            margin-bottom: 8px;
            color: #1e293b;
        }

        .tp-info p {
            color: #64748b;
        }

        .tp-link {
            background: #4f46e5;
            color: white;
            text-decoration: none;
            padding: 11px 20px;
            border-radius: 8px;
            font-weight: 600;
            white-space: nowrap;
            text-align: center;
        }

        .tp-link:hover {
            background: #3730a3;
        }

        /* ================= FOOTER ================= */

        footer {
            text-align: center;
            padding: 30px;
            color: #64748b;
        }

        /* ================= RESPONSIVE ================= */

        @media (max-width: 650px) {

            .tp-card {
                flex-direction: column;
                align-items: flex-start;
            }

            .tp-link {
                width: 100%;
            }

            .section-header {
                flex-direction: column;
                align-items: flex-start;
                gap: 15px;
            }
        }

    </style>
</head>

<body>

    <!-- ================= HEADER ================= -->

    <header>
        <h1>Imane Mkadem</h1>
        <p>Mes Travaux Pratiques</p>
    </header>

    <div class="container">

        <!-- ================= RETOUR PORTFOLIO ================= -->

        <a href="index.php" class="back">
            ← Retour au portfolio
        </a>

        <!-- ================= PAGE PRINCIPALE ================= -->

        <div id="home-section">

            <div class="title">

                <h2>Mes TPs</h2>

                <p>
                    Découvrez mes travaux pratiques.
                </p>

            </div>

            <div class="categories">

                <!-- ================= LES ATELIERS ================= -->

                <div class="category-card" onclick="showSection('uml')">

                    <div class="category-icon">📐</div>

                    <h3>Les Ateliers</h3>

                    <p>
                        Mes travaux pratiques : GANTT, PERT et gestion de projet.
                    </p>

                </div>

            </div>

        </div>

        <!-- ================= LES ATELIERS ================= -->

        <div id="uml-section" class="content-section">

            <div class="section-header">

                <h2>📐 Mes Ateliers</h2>

                <button
                    class="back-category"
                    onclick="showSection('home')">
                    ← Retour
                </button>

            </div>

            <div class="tp-list">

                <!-- TP ATELIER 1 -->

                <div class="tp-card">

                    <div class="tp-info">
                        <h3>Atelier 1</h3>
                        <p>Exercices pratiques.</p>
                    </div>

                    <a href="../public/images/Atelier1.jpeg"
                       class="tp-link" download>
                        Voir le TP Ex1
                    </a>

                    <a href="../public/images/Atelier1-2.jpeg"
                       class="tp-link" download>
                        Voir le TP Ex2
                    </a>

                    <a href="../public/images/Atelier1-3.jpeg"
                       class="tp-link" download>
                        Voir le TP Ex3
                    </a>

                </div>

                <!-- TP ATELIER 2 -->

                <div class="tp-card">

                    <div class="tp-info">
                        <h3>Atelier 2</h3>
                        <p>Travail pratique de gestion de projet.</p>
                    </div>

                    <a href="../public/docs/Atelier2.pdf"
                       class="tp-link" download>
                        Voir l'Atelier
                    </a>

                </div>

                <!-- TP ATELIER 5 -->

                <div class="tp-card">

                    <div class="tp-info">
                        <h3>Atelier 5</h3>
                        <p>Travail pratique.</p>
                    </div>

                    <a href="../public/images/Atelier5.pdf"
                       class="tp-link" download>
                        Voir l'Atelier
                    </a>

                </div>

                <!-- TP ATELIER 7 -->

                <div class="tp-card">

                    <div class="tp-info">
                        <h3>Atelier 7</h3>
                        <p>Projet SonarQube sur GitLab Pages.</p>
                    </div>

                    <a href="https://atelier-sonarqube-2cc49d.gitlab.io"
                       class="tp-link"
                       target="_blank"
                       rel="noopener noreferrer">
                        Voir l'Atelier
                    </a>

                </div>

            </div>

        </div>

    </div>

    <!-- ================= FOOTER ================= -->

    <footer>
        © 2026 Imane Mkadem — Portfolio
    </footer>

    <!-- ================= JAVASCRIPT ================= -->

    <script>

        function showSection(section) {

            const home = document.getElementById("home-section");
            const uml = document.getElementById("uml-section");

            home.style.display = "none";
            uml.style.display = "none";

            if (section === "home") {
                home.style.display = "block";
            }

            if (section === "uml") {
                uml.style.display = "block";
                uml.classList.add("active");
            }

        }

    </script>

</body>
</html>
