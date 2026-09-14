<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Mes Modules | Imane Mkadem</title>

    <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background: #0f172a;
            color: white;
        }

        /* NAVBAR */

        nav {
            padding: 20px 8%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: #0f172a;
            border-bottom: 1px solid #1e293b;
        }

        .logo {
            font-size: 25px;
            font-weight: bold;
            color: #38bdf8;
        }

        .back {
            color: white;
            text-decoration: none;
            font-weight: bold;
        }

        .back:hover {
            color: #38bdf8;
        }

        /* PAGE */

        .container {
            max-width: 1100px;
            margin: auto;
            padding: 70px 8%;
        }

        .title {
            text-align: center;
            margin-bottom: 15px;
            font-size: 45px;
        }

        .title span {
            color: #38bdf8;
        }

        .subtitle {
            text-align: center;
            color: #94a3b8;
            font-size: 18px;
            margin-bottom: 50px;
        }

        /* MODULES */

        .modules {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 30px;
        }

        .module {
            background: #1e293b;
            padding: 30px;
            border-radius: 15px;
            border: 1px solid #334155;
            transition: 0.3s;
        }

        .module:hover {
            transform: translateY(-8px);
            border-color: #38bdf8;
        }

        .module-code {
            color: #38bdf8;
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .module h2 {
            font-size: 24px;
            margin-bottom: 15px;
        }

        .module p {
            color: #cbd5e1;
            margin-bottom: 25px;
        }

        .btn {
            display: inline-block;
            padding: 12px 20px;
            background: #38bdf8;
            color: #0f172a;
            text-decoration: none;
            border-radius: 8px;
            font-weight: bold;
            transition: 0.3s;
        }

        .btn:hover {
            background: #7dd3fc;
            transform: translateY(-3px);
        }

        /* FOOTER */

        footer {
            text-align: center;
            padding: 25px;
            background: #020617;
            color: #94a3b8;
            margin-top: 50px;
        }

        /* RESPONSIVE */

        @media (max-width: 768px) {

            .modules {
                grid-template-columns: 1fr;
            }

            .title {
                font-size: 35px;
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

    <a href="index.php" class="back">
        ← Retour
    </a>

</nav>


<!-- ================= MODULES ================= -->

<div class="container">

    <h1 class="title">
        Mes <span>Modules</span>
    </h1>

    <p class="subtitle">
        Développement Digital — Option Web Full Stack
    </p>


    <div class="modules">


        <!-- M201 -->

        <div class="module">

            <div class="module-code">
                M201
            </div>

            <h2>
                Préparation d’un projet web
            </h2>

            <p>
                Préparation et organisation d'un projet
                de développement web.
            </p>

            <a href="TPS.php" class="btn">
                Voir les TPs
            </a>

        </div>


        <!-- M202 -->

        <div class="module">

            <div class="module-code">
                M202
            </div>

            <h2>
                Approche agile
            </h2>

            <p>
                Méthodes et pratiques agiles utilisées
                dans la gestion des projets.
            </p>

            <a href="#" class="btn">
                Voir les TPs
            </a>

        </div>


        <!-- M203 -->

        <div class="module">

            <div class="module-code">
                M203
            </div>

            <h2>
                Gestion des données
            </h2>

            <p>
                Conception, organisation et gestion
                des bases de données.
            </p>

            <a href="#" class="btn">
                Voir les TPs
            </a>

        </div>


        <!-- M204 -->

        <div class="module">

            <div class="module-code">
                M204
            </div>

            <h2>
                Développement front-end
            </h2>

            <p>
                Création des interfaces web avec HTML,
                CSS et JavaScript.
            </p>

            <a href="#" class="btn">
                Voir les TPs
            </a>

        </div>


        <!-- M205 -->

        <div class="module">

            <div class="module-code">
                M205
            </div>

            <h2>
                Développement back-end
            </h2>

            <p>
                Développement côté serveur avec PHP
                et gestion des fonctionnalités web.
            </p>

            <a href="#" class="btn">
                Voir les TPs
            </a>

        </div>


        <!-- M206 -->

        <div class="module">

            <div class="module-code">
                M206
            </div>

            <h2>
                Création d’une application Cloud native
            </h2>

            <p>
                Développement et déploiement
                d'applications adaptées au Cloud.
            </p>

            <a href="#" class="btn">
                Voir les TPs
            </a>

        </div>


    </div>

</div>


<!-- ================= FOOTER ================= -->

<footer>

    © 2026 Imane Mkadem — Portfolio

</footer>


</body>

</html>