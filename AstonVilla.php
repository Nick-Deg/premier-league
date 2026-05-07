<?php
require_once "config.php";
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aston Villa - Wedstrijden</title>
    <link rel="stylesheet" href="css/premier.css?v=<?= filemtime('css/premier.css') ?>">
</head>
<body class="manu-body">
    <main class="manu-page astonvilla-page">
        <header class="manu-topbar">
            <img src="media/leeuw geel.png" alt="Leeuw geel links" class="manu-devil">
            <img src="media/aston villa.png" alt="Aston Villa logo" class="manu-top-logo">
            <img src="media/leeuw geel.png" alt="Leeuw geel rechts" class="manu-devil">
        </header>

        <section class="manu-content">
            <a href="Clubs.php" class="manu-back-btn">BACK</a>

            <div class="manu-fixtures" aria-label="Aston Villa thuiswedstrijden">
                <article class="manu-match-row">
                    <img src="media/premiere league.png" alt="Premier League" class="manu-league-logo">
                    <img src="media/aston villa.png" alt="Aston Villa" class="manu-team-logo">
                    <span class="manu-vs">VS</span>
                    <img src="media/Fulham.png" alt="Fulham" class="manu-team-logo">
                    <div class="manu-match-info">
                        <span>9 Mei</span>
                        <span>20:00</span>
                    </div>
                    <a href="#" class="manu-go-btn">&gt;</a>
                </article>

                <article class="manu-match-row">
                    <img src="media/premiere league.png" alt="Premier League" class="manu-league-logo">
                    <img src="media/aston villa.png" alt="Aston Villa" class="manu-team-logo">
                    <span class="manu-vs">VS</span>
                    <img src="media/Chelsea FC.png" alt="Chelsea" class="manu-team-logo">
                    <div class="manu-match-info">
                        <span>16 Mei</span>
                        <span>18:30</span>
                    </div>
                    <a href="#" class="manu-go-btn">&gt;</a>
                </article>

                <article class="manu-match-row">
                    <img src="media/premiere league.png" alt="Premier League" class="manu-league-logo">
                    <img src="media/aston villa.png" alt="Aston Villa" class="manu-team-logo">
                    <span class="manu-vs">VS</span>
                    <img src="media/Crystal_Palace.png" alt="Crystal Palace" class="manu-team-logo">
                    <div class="manu-match-info">
                        <span>23 Mei</span>
                        <span>21:00</span>
                    </div>
                    <a href="#" class="manu-go-btn">&gt;</a>
                </article>

                <article class="manu-match-row">
                    <img src="media/premiere league.png" alt="Premier League" class="manu-league-logo">
                    <img src="media/aston villa.png" alt="Aston Villa" class="manu-team-logo">
                    <span class="manu-vs">VS</span>
                    <img src="media/newcastle utd.png" alt="Newcastle United" class="manu-team-logo">
                    <div class="manu-match-info">
                        <span>30 Mei</span>
                        <span>16:00</span>
                    </div>
                    <a href="#" class="manu-go-btn">&gt;</a>
                </article>

                <article class="manu-match-row">
                    <img src="media/premiere league.png" alt="Premier League" class="manu-league-logo">
                    <img src="media/aston villa.png" alt="Aston Villa" class="manu-team-logo">
                    <span class="manu-vs">VS</span>
                    <img src="media/Brentford.png" alt="Brentford" class="manu-team-logo">
                    <div class="manu-match-info">
                        <span>6 Juni</span>
                        <span>14:00</span>
                    </div>
                    <a href="#" class="manu-go-btn">&gt;</a>
                </article>

                <article class="manu-match-row">
                    <img src="media/premiere league.png" alt="Premier League" class="manu-league-logo">
                    <img src="media/aston villa.png" alt="Aston Villa" class="manu-team-logo">
                    <span class="manu-vs">VS</span>
                    <img src="media/Manchestercity.png" alt="Manchester City" class="manu-team-logo">
                    <div class="manu-match-info">
                        <span>13 Juni</span>
                        <span>17:00</span>
                    </div>
                    <a href="#" class="manu-go-btn">&gt;</a>
                </article>
            </div>
        </section>
    </main>
</body>
</html>
