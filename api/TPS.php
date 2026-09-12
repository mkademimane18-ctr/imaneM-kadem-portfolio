<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Mes TPs - Imane Mkadem</title>

    <style>

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

        .back:hover {
            text-decoration: underline;
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

        footer {
            text-align: center;
            padding: 30px;
            color: #64748b;
        }

        @media (max-width: 650px) {

            .tp-card {
                flex-direction: column;
                align-items: flex-start;
            }

            .tp-link {
                width: 100%;
                text-align: center;
            }

        }

    </style>

</head>

<body>

<header>

    <h1>Imane Mkadem</h1>

    <p>Mes Travaux Pratiques</p>

</header>


<div class="container">

    <a href="index.php" class="back">
        ← Retour au portfolio
    </a>


    <div class="title">

        <h2>Mes TPs</h2>

        <p>
            Découvrez mes travaux réalisés avec Looping et StarUML.
        </p>

    </div>


    <div class="tp-list">


        <!-- TP 1 -->

        <div class="tp-card">

            <div class="tp-info">

                <h3>TP 1 — MCD ChriwBi3</h3>

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


        <!-- TP 2 -->

        <div class="tp-card">

            <div class="tp-info">

                <h3>TP 2 — Diagramme de Classe</h3>

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


        <!-- TP 3 -->

        <div class="tp-card">

            <div class="tp-info">

                <h3>TP 3 — Exercice StarUML</h3>

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


    </div>

</div>


<footer>

    © 2026 Imane Mkadem — Portfolio

</footer>

</body>

</html>