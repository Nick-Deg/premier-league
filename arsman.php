<?php
require_once "config.php";
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arsenal - Secties</title>
    <link rel="stylesheet" href="css/premier.css?v=<?= filemtime('css/premier.css') ?>">
</head>
<body class="manliv-body arsenal-seat-body">
    <main class="manliv-page">
        <header class="manliv-top">
            <div class="manliv-top-left">
                <a href="Arsenal.php" class="manliv-back manliv-back-inline">BACK</a>
                <h1 class="manliv-title manliv-title-white">EMIRATES STADIUM</h1>
            </div>
            <img src="media/arsenal.png" alt="Arsenal logo" class="manliv-logo">
        </header>

        <section class="manliv-main">
            <div class="manliv-map" aria-label="Plattegrond Emirates Stadium">
                <img src="media/arsenalseating.png" alt="Emirates Stadium stadion indeling">
            </div>

            <div class="manliv-list" aria-label="Ticket secties">
                <a href="#" class="manliv-card">
                    <span class="manliv-label">Sectie 1</span>
                    <span class="manliv-price">$420,99</span>
                    <span class="manliv-arrow">&gt;</span>
                </a>

                <a href="#" class="manliv-card">
                    <span class="manliv-label">Sectie 2</span>
                    <span class="manliv-price">$295,99</span>
                    <span class="manliv-arrow">&gt;</span>
                </a>

                <a href="#" class="manliv-card">
                    <span class="manliv-label">Sectie 3</span>
                    <span class="manliv-price">$225,99</span>
                    <span class="manliv-arrow">&gt;</span>
                </a>
            </div>
        </section>
    </main>
</body>
</html>
