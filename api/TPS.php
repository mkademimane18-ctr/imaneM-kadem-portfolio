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


        /* ================= CATEGORIES ================= */

        .categories {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
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
        }

        .tp-link:hover {
            background: #3730a3;
        }


        /* ================= FIGMA ================= */

        .figma-message {
            background: white;

            padding: 50px;

            border-radius: 15px;

            text-align: center;

            box-shadow: 0 5px 20px rgba(0,0,0,0.08);
        }

        .figma-message .icon {
            font-size: 60px;
            margin-bottom: 15px;
        }

        .figma-message h3 {
            margin-bottom: 10px;
        }

        .figma-message p {
            color: #64748b;
        }


        /* ================= FOOTER ================= */

        footer {
            text-align: center;
            padding: 30px;
            color: #64748b;
        }


        /* ================= RESPONSIVE ================= */

        @media (max-width: 650px) {

            .categories {
                grid-template-columns: 1fr;
            }

            .tp-card {
                flex-direction: column;
                align-items: flex-start;
            }

            .tp-link {
                width: 100%;
                text-align: center;
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


    <!-- ================================================= -->
    <!--                 PAGE PRINCIPALE                   -->
    <!-- ================================================= -->

    <div id="home-section">

        <div class="title">

            <h2>Mes TPs</h2>

            <p>
                Choisissez une catégorie pour découvrir mes travaux.
            </p>

        </div>


        <div class="categories">


            <!-- ================= UML ================= -->

            <div class="category-card" onclick="showSection('uml')">

                <div class="category-icon">
                    📐
                </div>

                <h3>UML</h3>

                <p>
                    Mes travaux réalisés avec Looping et StarUML :
                    MCD, diagrammes de classes, Use Case...
                </p>

            </div>


            <!-- ================= FIGMA ================= -->

            <div class="category-card" onclick="showSection('figma')">

                <div class="category-icon">
                    🎨
                </div>

                <h3>Figma</h3>

                <p>
                    Mes travaux de conception et de design
                    réalisés avec Figma.
                </p>

            </div>


        </div>

    </div>



    <!-- ================================================= -->
    <!--                     UML                           -->
    <!-- ================================================= -->

    <div id="uml-section" class="content-section">


        <div class="section-header">

            <h2>📐 Mes travaux UML</h2>

            <button
                class="back-category"
                onclick="showSection('home')"
            >
                ← Retour
            </button>

        </div>


        <div class="tp-list">


            <!-- ================= TP 1 ================= -->

            <div class="tp-card">

                <div class="tp-info">

                    <h3>TP 1 — les 5 Diagrammes Atelier</h3>

                    <p>
                        UML
                    </p>

                </div>

                <a
                    href="../public/docs/AtelierDiag.pdf"
                    class="tp-link"
                    download
                >
                    Voir le TP
                </a>

            </div>



            <!-- ================= TP 2 ================= -->

            <div class="tp-card">

                <div class="tp-info">

                    <h3>TP 2 — MCD ChriwBi3</h3>

                    <p>
                        Modèle Conceptuel de Données réalisé avec Looping.
                    </p>

                </div>

                <a
                    href="../public/docs/Chriwbi3_MCD.loo"
                    class="tp-link"
                    download
                >
                    Voir le TP
                </a>

            </div>



            <!-- ================= TP 3 ================= -->

            <div class="tp-card">

                <div class="tp-info">

                    <h3>TP 3 — Diagramme de Classe</h3>

                    <p>
                        Diagramme de classe réalisé avec StarUML.
                    </p>

                </div>

                <a
                    href="../public/docs/TP1_DiagrammeClass.mdj"
                    class="tp-link"
                    download
                >
                    Voir le TP
                </a>

            </div>



            <!-- ================= TP 4 ================= -->

            <div class="tp-card">

                <div class="tp-info">

                    <h3>TP 4 — Exercice StarUML</h3>

                    <p>
                        Travail UML réalisé avec StarUML.
                    </p>

                </div>

                <a
                    href="../public/docs/Ex.mdj"
                    class="tp-link"
                    download
                >
                    Voir le TP
                </a>

            </div>



            <!-- ================= TP 5 ================= -->

            <div class="tp-card">

                <div class="tp-info">

                    <h3>TP 5 — Use Case</h3>

                    <p>
                        Diagramme de cas d'utilisation réalisé avec StarUML.
                    </p>

                </div>

                <a
                    href="../public/docs/USEcase.mdj"
                    class="tp-link"
                    download
                >
                    Voir le TP
                </a>

            </div>



            <!-- ================= TP 6 ================= -->

            <div class="tp-card">

                <div class="tp-info">

                    <h3>TP 6 — Use Case 2</h3>

                    <p>
                        Travail UML réalisé avec StarUML.
                    </p>

                </div>

                <a
                    href="../public/docs/USEcase2.mdj"
                    class="tp-link"
                    download
                >
                    Voir le TP
                </a>

            </div>


        </div>

    </div>



    <!-- ================================================= -->
    <!--                    FIGMA                          -->
    <!-- ================================================= -->

    <div id="figma-section" class="content-section">


        <div class="section-header">

            <h2>🎨 Mes travaux Figma</h2>

            <button
                class="back-category"
                onclick="showSection('home')"
            >
                ← Retour
            </button>

        </div>


        <div class="figma-message">

            <div class="icon">
                🎨
            </div>

            <h3>Mes travaux Figma</h3>

            <p>
                Cette partie sera bientôt complétée.
            </p>

        </div>

         <div class="tp-card">

                <div class="tp-info">

                    <h3>Atelier 1 - Figma</h3>

                    <p>
                        Travail Figma réalisé avec Figma.
                    </p>

                </div>

                <a
                    href="../public/docs/Atelier1.pdf"
                    class="tp-link"
                    download
                >
                    Voir le TP
                </a>

            </div>

            <div class="tp-card">

                <div class="tp-info">

                    <h3>Atelier 2 - Figma</h3>

                    <p>
                        Travail Figma réalisé avec Figma.
                    </p>

                </div>

                <a
                    href="../public/images/Frame 4.jpg"
                    class="tp-link"
                    download
                >
                    Voir le TP
                </a>

            </div>
    </div>


</div>



<!-- ================= FOOTER ================= -->

<footer>

    © 2026 Imane Mkadem — Portfolio

</footer>



<!-- ================================================= -->
<!--                  JAVASCRIPT                       -->
<!-- ================================================= -->

<script>

    function showSection(section) {

        // الصفحة الرئيسية
        document.getElementById("home-section").style.display = "none";

        // UML
        document.getElementById("uml-section").classList.remove("active");

        // Figma
        document.getElementById("figma-section").classList.remove("active");


        // إذا اختار UML
        if (section === "uml") {

            document
                .getElementById("uml-section")
                .classList.add("active");

        }


        // إذا اختار Figma
        else if (section === "figma") {

            document
                .getElementById("figma-section")
                .classList.add("active");

        }


        // إذا رجع للصفحة الرئيسية
        else if (section === "home") {

            document
                .getElementById("home-section")
                .style.display = "block";

        }

    }

</script>


</body>
</html>