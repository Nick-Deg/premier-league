<?php
require_once "config.php";
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liverpool - Wedstrijden</title>
    <link rel="stylesheet" href="css/premier.css?v=<?= filemtime('css/premier.css') ?>">
</head>
<body class="manu-body">
    <main class="manu-page liverpool-page">
        <header class="manu-topbar">
            <img src="media/liverbird.png" alt="Liverbird links" class="manu-devil">
            <img src="media/Liverpool.jpg" alt="Liverpool logo" class="manu-top-logo">
            <img src="media/liverbird.png" alt="Liverbird rechts" class="manu-devil">
        </header>

        <section class="manu-content">
            <a href="Clubs.php" class="manu-back-btn">BACK</a>

            <div class="manu-fixtures" aria-label="Liverpool thuiswedstrijden">
                <article class="manu-match-row">
                    <img src="media/premiere league.png" alt="Premier League" class="manu-league-logo">
                    <img src="media/Liverpool.jpg" alt="Liverpool" class="manu-team-logo">
                    <span class="manu-vs">VS</span>
                    <img src="media/Everton.png" alt="Everton" class="manu-team-logo">
                    <div class="manu-match-info">
                        <span>23 April</span>
                        <span>19:00</span>
                    </div>
                    <a href="#" class="manu-go-btn">&gt;</a>
                </article>

                <article class="manu-match-row">
                    <img src="media/premiere league.png" alt="Premier League" class="manu-league-logo">
                    <img src="media/Liverpool.jpg" alt="Liverpool" class="manu-team-logo">
                    <span class="manu-vs">VS</span>
                    <img src="media/Brentford.png" alt="Brentford" class="manu-team-logo">
                    <div class="manu-match-info">
                        <span>4 Mei</span>
                        <span>15:30</span>
                    </div>
                    <a href="#" class="manu-go-btn">&gt;</a>
                </article>

                <article class="manu-match-row">
                    <img src="media/premiere league.png" alt="Premier League" class="manu-league-logo">
                    <img src="media/Liverpool.jpg" alt="Liverpool" class="manu-team-logo">
                    <span class="manu-vs">VS</span>
                    <img src="media/Wolverhampton.png" alt="Wolverhampton" class="manu-team-logo">
                    <div class="manu-match-info">
                        <span>11 Mei</span>
                        <span>20:00</span>
                    </div>
                    <a href="#" class="manu-go-btn">&gt;</a>
                </article>

                <article class="manu-match-row">
                    <img src="media/premiere league.png" alt="Premier League" class="manu-league-logo">
                    <img src="media/Liverpool.jpg" alt="Liverpool" class="manu-team-logo">
                    <span class="manu-vs">VS</span>
                    <img src="media/Crystal_Palace.png" alt="Crystal Palace" class="manu-team-logo">
                    <div class="manu-match-info">
                        <span>18 Mei</span>
                        <span>17:30</span>
                    </div>
                    <a href="#" class="manu-go-btn">&gt;</a>
                </article>

                <article class="manu-match-row">
                    <img src="media/premiere league.png" alt="Premier League" class="manu-league-logo">
                    <img src="media/Liverpool.jpg" alt="Liverpool" class="manu-team-logo">
                    <span class="manu-vs">VS</span>
                    <img src="media/newcastle utd.png" alt="Newcastle United" class="manu-team-logo">
                    <div class="manu-match-info">
                        <span>25 Mei</span>
                        <span>14:00</span>
                    </div>
                    <a href="#" class="manu-go-btn">&gt;</a>
                </article>

                <article class="manu-match-row">
                    <img src="media/premiere league.png" alt="Premier League" class="manu-league-logo">
                    <img src="media/Liverpool.jpg" alt="Liverpool" class="manu-team-logo">
                    <span class="manu-vs">VS</span>
                    <img src="media/Chelsea FC.png" alt="Chelsea" class="manu-team-logo">
                    <div class="manu-match-info">
                        <span>1 Juni</span>
                        <span>16:00</span>
                    </div>
                    <a href="#" class="manu-go-btn">&gt;</a>
                </article>
            </div>
        </section>
    </main>
</body>
</html>
