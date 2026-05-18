<?php
require_once "config.php";
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arsenal - Wedstrijden</title>
    <link rel="stylesheet" href="css/premier.css?v=<?= filemtime('css/premier.css') ?>">
</head>
<body class="manu-body">
    <main class="manu-page arsenal-page">
        <header class="manu-topbar">
            <img src="media/cannon.png" alt="Cannon links" class="manu-devil">
            <img src="media/arsenal.png" alt="Arsenal logo" class="manu-top-logo">
            <img src="media/cannon.png" alt="Cannon rechts" class="manu-devil">
        </header>

        <section class="manu-content">
            <a href="Clubs.php" class="manu-back-btn">BACK</a>

            <div class="manu-fixtures" aria-label="Arsenal thuiswedstrijden">
                <article class="manu-match-row">
                    <img src="media/premiere league.png" alt="Premier League" class="manu-league-logo">
                    <img src="media/arsenal.png" alt="Arsenal" class="manu-team-logo">
                    <span class="manu-vs">VS</span>
                    <img src="media/Manchestercity.png" alt="Manchester City" class="manu-team-logo">
                    <div class="manu-match-info">
                        <span>27 April</span>
                        <span>17:45</span>
                    </div>
                    <a href="arsman.php" class="manu-go-btn">&gt;</a>
                </article>

                <article class="manu-match-row">
                    <img src="media/premiere league.png" alt="Premier League" class="manu-league-logo">
                    <img src="media/arsenal.png" alt="Arsenal" class="manu-team-logo">
                    <span class="manu-vs">VS</span>
                    <img src="media/Fulham.png" alt="Fulham" class="manu-team-logo">
                    <div class="manu-match-info">
                        <span>8 Mei</span>
                        <span>20:00</span>
                    </div>
                    <a href="arsful.php" class="manu-go-btn">&gt;</a>
                </article>

                <article class="manu-match-row">
                    <img src="media/premiere league.png" alt="Premier League" class="manu-league-logo">
                    <img src="media/arsenal.png" alt="Arsenal" class="manu-team-logo">
                    <span class="manu-vs">VS</span>
                    <img src="media/brighton.png" alt="Brighton" class="manu-team-logo">
                    <div class="manu-match-info">
                        <span>14 Mei</span>
                        <span>18:30</span>
                    </div>
                    <a href="arsful.php" class="manu-go-btn">&gt;</a>
                </article>

                <article class="manu-match-row">
                    <img src="media/premiere league.png" alt="Premier League" class="manu-league-logo">
                    <img src="media/arsenal.png" alt="Arsenal" class="manu-team-logo">
                    <span class="manu-vs">VS</span>
                    <img src="media/Brentford.png" alt="Brentford" class="manu-team-logo">
                    <div class="manu-match-info">
                        <span>22 Mei</span>
                        <span>21:00</span>
                    </div>
                    <a href="arsbre.php" class="manu-go-btn">&gt;</a>
                </article>

                <article class="manu-match-row">
                    <img src="media/premiere league.png" alt="Premier League" class="manu-league-logo">
                    <img src="media/arsenal.png" alt="Arsenal" class="manu-team-logo">
                    <span class="manu-vs">VS</span>
                    <img src="media/newcastle utd.png" alt="Newcastle United" class="manu-team-logo">
                    <div class="manu-match-info">
                        <span>31 Mei</span>
                        <span>16:00</span>
                    </div>
                    <a href="arsnew.php" class="manu-go-btn">&gt;</a>
                </article>

                <article class="manu-match-row">
                    <img src="media/premiere league.png" alt="Premier League" class="manu-league-logo">
                    <img src="media/arsenal.png" alt="Arsenal" class="manu-team-logo">
                    <span class="manu-vs">VS</span>
                    <img src="media/Chelsea FC.png" alt="Chelsea" class="manu-team-logo">
                    <div class="manu-match-info">
                        <span>7 Juni</span>
                        <span>14:30</span>
                    </div>
                    <a href="arsche.php" class="manu-go-btn">&gt;</a>
                </article>
            </div>
        </section>
    </main>
</body>
</html>
