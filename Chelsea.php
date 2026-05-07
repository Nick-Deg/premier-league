<?php
require_once "config.php";
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chelsea - Wedstrijden</title>
    <link rel="stylesheet" href="css/premier.css?v=<?= filemtime('css/premier.css') ?>">
</head>
<body class="manu-body">
    <main class="manu-page chelsea-page">
        <header class="manu-topbar">
            <img src="media/leeuw.png" alt="Leeuw links" class="manu-devil">
            <img src="media/Chelsea FC.png" alt="Chelsea logo" class="manu-top-logo">
            <img src="media/leeuw.png" alt="Leeuw rechts" class="manu-devil">
        </header>

        <section class="manu-content">
            <a href="Clubs.php" class="manu-back-btn">BACK</a>

            <div class="manu-fixtures" aria-label="Chelsea thuiswedstrijden">
                <article class="manu-match-row">
                    <img src="media/premiere league.png" alt="Premier League" class="manu-league-logo">
                    <img src="media/Chelsea FC.png" alt="Chelsea" class="manu-team-logo">
                    <span class="manu-vs">VS</span>
                    <img src="media/Leicester_City.png" alt="Leicester City" class="manu-team-logo">
                    <div class="manu-match-info">
                        <span>5 Mei</span>
                        <span>18:45</span>
                    </div>
                    <a href="#" class="manu-go-btn">&gt;</a>
                </article>

                <article class="manu-match-row">
                    <img src="media/premiere league.png" alt="Premier League" class="manu-league-logo">
                    <img src="media/Chelsea FC.png" alt="Chelsea" class="manu-team-logo">
                    <span class="manu-vs">VS</span>
                    <img src="media/Crystal_Palace.png" alt="Crystal Palace" class="manu-team-logo">
                    <div class="manu-match-info">
                        <span>12 Mei</span>
                        <span>21:00</span>
                    </div>
                    <a href="#" class="manu-go-btn">&gt;</a>
                </article>

                <article class="manu-match-row">
                    <img src="media/premiere league.png" alt="Premier League" class="manu-league-logo">
                    <img src="media/Chelsea FC.png" alt="Chelsea" class="manu-team-logo">
                    <span class="manu-vs">VS</span>
                    <img src="media/brighton.png" alt="Brighton" class="manu-team-logo">
                    <div class="manu-match-info">
                        <span>19 Mei</span>
                        <span>17:30</span>
                    </div>
                    <a href="#" class="manu-go-btn">&gt;</a>
                </article>

                <article class="manu-match-row">
                    <img src="media/premiere league.png" alt="Premier League" class="manu-league-logo">
                    <img src="media/Chelsea FC.png" alt="Chelsea" class="manu-team-logo">
                    <span class="manu-vs">VS</span>
                    <img src="media/AFC_Bournemouth.png" alt="Bournemouth" class="manu-team-logo">
                    <div class="manu-match-info">
                        <span>25 Mei</span>
                        <span>15:00</span>
                    </div>
                    <a href="#" class="manu-go-btn">&gt;</a>
                </article>

                <article class="manu-match-row">
                    <img src="media/premiere league.png" alt="Premier League" class="manu-league-logo">
                    <img src="media/Chelsea FC.png" alt="Chelsea" class="manu-team-logo">
                    <span class="manu-vs">VS</span>
                    <img src="media/Brentford.png" alt="Brentford" class="manu-team-logo">
                    <div class="manu-match-info">
                        <span>2 Juni</span>
                        <span>14:00</span>
                    </div>
                    <a href="#" class="manu-go-btn">&gt;</a>
                </article>

                <article class="manu-match-row">
                    <img src="media/premiere league.png" alt="Premier League" class="manu-league-logo">
                    <img src="media/Chelsea FC.png" alt="Chelsea" class="manu-team-logo">
                    <span class="manu-vs">VS</span>
                    <img src="media/Nottingham_Forest.png" alt="Nottingham Forest" class="manu-team-logo">
                    <div class="manu-match-info">
                        <span>9 Juni</span>
                        <span>16:30</span>
                    </div>
                    <a href="#" class="manu-go-btn">&gt;</a>
                </article>
            </div>
        </section>
    </main>
</body>
</html>
