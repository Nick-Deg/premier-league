<?php
require_once "config.php";
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liverpool - Secties</title>
    <link rel="stylesheet" href="css/premier.css?v=<?= filemtime('css/premier.css') ?>">
</head>
<body class="manliv-body">
    <main class="manliv-page">
        <header class="manliv-top">
            <div class="manliv-top-left">
                <a href="Liverpool.php" class="manliv-back manliv-back-inline">BACK</a>
                <h1 class="manliv-title manliv-title-white">ANFIELD</h1>
            </div>
            <img src="media/Liverpool.jpg" alt="Liverpool logo" class="manliv-logo">
        </header>

        <section class="manliv-main">
            <div class="manliv-map" aria-label="Plattegrond stadion">
                <img src="media/anfieldseating.png" alt="Anfield stadion indeling">
            </div>

            <div class="manliv-list" aria-label="Ticket secties">
                <a href="#" class="manliv-card">
                    <span class="manliv-label">Sectie 1</span>
                    <span class="manliv-price">$319,99</span>
                    <span class="manliv-arrow">&gt;</span>
                </a>

                <a href="#" class="manliv-card">
                    <span class="manliv-label">Sectie 2</span>
                    <span class="manliv-price">$239,99</span>
                    <span class="manliv-arrow">&gt;</span>
                </a>

                <a href="#" class="manliv-card">
                    <span class="manliv-label">Sectie 3</span>
                    <span class="manliv-price">$139,99</span>
                    <span class="manliv-arrow">&gt;</span>
                </a>
            </div>
        </section>
    </main>
</body>
</html>
