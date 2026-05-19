<?php
require_once "config.php";
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nottingham Forest - Secties</title>
    <link rel="stylesheet" href="css/premier.css?v=<?= filemtime('css/premier.css') ?>">
    <style>
        /* Local seat page styling for Nottingham Forest */
        body.forest-seat-body .manliv-card {
            background: #ffffff;
            color: #111;
            border-radius: 26px;
            box-shadow: 0 2px 12px rgba(0, 0, 0, 0.08);
        }
        body.forest-seat-body .manliv-label {
            color: #111;
            font-size: clamp(30px, 3.2vw, 48px);
        }
        body.forest-seat-body .manliv-arrow {
            background: #8b0000 !important;
            color: #fff;
        }
        body.forest-seat-body .manliv-back {
            background: #8b0000;
            color: #ffffff;
        }
        body.forest-seat-body .manliv-map img {
            object-fit: contain;
        }
        body.forest-seat-body .manliv-main {
            align-items: start;
        }
    </style>

</head>
<body class="manliv-body forest-seat-body">
    <main class="manliv-page">
        <header class="manliv-top">
            <div class="manliv-top-left">
                <a href="nottinhghamforest.php" class="manliv-back manliv-back-inline">BACK</a>
                <h1 class="manliv-title manliv-title-white">PETER TAYLOR STAND</h1>
            </div>
            <img src="media/Nottingham_Forest.png" alt="Nottingham Forest logo" class="manliv-logo">
        </header>

        <section class="manliv-main">
            <div class="manliv-map" aria-label="Plattegrond Foreststadion">
                <img src="media/notting.jpg" alt="Nottingham Forest stadion indeling">
            </div>

            <div class="manliv-list" aria-label="Ticket secties">
                <a href="#" class="manliv-card">
                    <span class="manliv-label">UT</span>
                    <span class="manliv-price">$179,99</span>
                    <span class="manliv-arrow">&gt;</span>
                </a>

                <a href="#" class="manliv-card">
                    <span class="manliv-label">T3</span>
                    <span class="manliv-price">$139,99</span>
                    <span class="manliv-arrow">&gt;</span>
                </a>

                <a href="#" class="manliv-card">
                    <span class="manliv-label">A7</span>
                    <span class="manliv-price">$99,99</span>
                    <span class="manliv-arrow">&gt;</span>
                </a>
            </div>
        </section>
    </main>
</body>
</html>