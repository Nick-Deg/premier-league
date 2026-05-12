<?php
require_once "config.php";
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manchester City - Wedstrijden</title>
    <link rel="stylesheet" href="css/premier.css?v=<?= filemtime('css/premier.css') ?>">
</head>
<body class="manu-body">
    <main class="manu-page mancity-page">
        <header class="manu-topbar">
            <img src="media/rose.png" alt="Rose links" class="manu-devil">
            <img src="media/Manchestercity.png" alt="Manchester City logo" class="manu-top-logo">
            <img src="media/rose.png" alt="Rose rechts" class="manu-devil">
        </header>

        <section class="manu-content">
            <a href="Clubs.php" class="manu-back-btn">BACK</a>

            <div class="manu-fixtures" aria-label="Manchester City thuiswedstrijden">
                <article class="manu-match-row">
                    <img src="media/premiere league.png" alt="Premier League" class="manu-league-logo">
                    <img src="media/Manchestercity.png" alt="Manchester City" class="manu-team-logo">
                    <span class="manu-vs">VS</span>
                    <img src="media/arsenal.png" alt="Arsenal" class="manu-team-logo">
                    <div class="manu-match-info">
                        <span>6 Mei</span>
                        <span>20:00</span>
                    </div>
                    <a href="mancars.php" class="manu-go-btn">&gt;</a>
                </article>

                <article class="manu-match-row">
                    <img src="media/premiere league.png" alt="Premier League" class="manu-league-logo">
                    <img src="media/Manchestercity.png" alt="Manchester City" class="manu-team-logo">
                    <span class="manu-vs">VS</span>
                    <img src="media/Crystal_Palace.png" alt="Crystal Palace" class="manu-team-logo">
                    <div class="manu-match-info">
                        <span>13 Mei</span>
                        <span>18:45</span>
                    </div>
                    <a href="#" class="manu-go-btn">&gt;</a>
                </article>

                <article class="manu-match-row">
                    <img src="media/premiere league.png" alt="Premier League" class="manu-league-logo">
                    <img src="media/Manchestercity.png" alt="Manchester City" class="manu-team-logo">
                    <span class="manu-vs">VS</span>
                    <img src="media/Everton.png" alt="Everton" class="manu-team-logo">
                    <div class="manu-match-info">
                        <span>21 Mei</span>
                        <span>21:00</span>
                    </div>
                    <a href="#" class="manu-go-btn">&gt;</a>
                </article>

                <article class="manu-match-row">
                    <img src="media/premiere league.png" alt="Premier League" class="manu-league-logo">
                    <img src="media/Manchestercity.png" alt="Manchester City" class="manu-team-logo">
                    <span class="manu-vs">VS</span>
                    <img src="media/Fulham.png" alt="Fulham" class="manu-team-logo">
                    <div class="manu-match-info">
                        <span>29 Mei</span>
                        <span>16:30</span>
                    </div>
                    <a href="#" class="manu-go-btn">&gt;</a>
                </article>

                <article class="manu-match-row">
                    <img src="media/premiere league.png" alt="Premier League" class="manu-league-logo">
                    <img src="media/Manchestercity.png" alt="Manchester City" class="manu-team-logo">
                    <span class="manu-vs">VS</span>
                    <img src="media/Leicester_City.png" alt="Leicester City" class="manu-team-logo">
                    <div class="manu-match-info">
                        <span>4 Juni</span>
                        <span>14:00</span>
                    </div>
                    <a href="#" class="manu-go-btn">&gt;</a>
                </article>

                <article class="manu-match-row">
                    <img src="media/premiere league.png" alt="Premier League" class="manu-league-logo">
                    <img src="media/Manchestercity.png" alt="Manchester City" class="manu-team-logo">
                    <span class="manu-vs">VS</span>
                    <img src="media/brighton.png" alt="Brighton" class="manu-team-logo">
                    <div class="manu-match-info">
                        <span>11 Juni</span>
                        <span>17:00</span>
                    </div>
                    <a href="#" class="manu-go-btn">&gt;</a>
                </article>
            </div>
        </section>
    </main>
</body>
</html>
