<?php 
require_once "config.php";
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nottingham Forest - Wedstrijden</title>
    <link rel="stylesheet" href="css/premier.css?v=<?= filemtime('css/premier.css') ?>">
</head>
<body class="manu-body">
    <main class="manu-page forest-page">
        <header class="manu-topbar">
            <img src="media/boom.png" alt="Boom links" class="manu-devil">
            <img src="media/Nottingham_Forest.png" alt="Nottingham Forest logo" class="manu-top-logo">
            <img src="media/boom.png" alt="Boom rechts" class="manu-devil">
        </header>

        <section class="manu-content">
            <a href="Clubs.php" class="manu-back-btn">BACK</a>

            <div class="manu-fixtures" aria-label="Nottingham Forest thuiswedstrijden">

                <article class="manu-match-row">
                    <img src="media/premiere league.png" alt="Premier League" class="manu-league-logo">
                    <img src="media/Nottingham_Forest.png" alt="Nottingham Forest" class="manu-team-logo">
                    <span class="manu-vs">VS</span>
                    <img src="media/Tottenham bal.png" alt="Tottenham" class="manu-team-logo">
                    <div class="manu-match-info">
                        <span>11 Mei</span>
                        <span>17:00</span>
                    </div>
                    <a href="#" class="manu-go-btn">&gt;</a>
                </article>

                <article class="manu-match-row">
                    <img src="media/premiere league.png" alt="Premier League" class="manu-league-logo">
                    <img src="media/Nottingham_Forest.png" alt="Nottingham Forest" class="manu-team-logo">
                    <span class="manu-vs">VS</span>
                    <img src="media/Wolverhampton.png" alt="Liverpool" class="manu-team-logo">
                    <div class="manu-match-info">
                        <span>18 Mei</span>
                        <span>20:00</span>
                    </div>
                    <a href="#" class="manu-go-btn">&gt;</a>
                </article>

                <article class="manu-match-row">
                    <img src="media/premiere league.png" alt="Premier League" class="manu-league-logo">
                    <img src="media/Nottingham_Forest.png" alt="Nottingham Forest" class="manu-team-logo">
                    <span class="manu-vs">VS</span>
                    <img src="media/Leicester_city.png" alt="Leicester" class="manu-team-logo">
                    <div class="manu-match-info">
                        <span>25 Mei</span>
                        <span>18:30</span>
                    </div>
                    <a href="#" class="manu-go-btn">&gt;</a>
                </article>

                <article class="manu-match-row">
                    <img src="media/premiere league.png" alt="Premier League" class="manu-league-logo">
                    <img src="media/Nottingham_Forest.png" alt="Nottingham Forest" class="manu-team-logo">
                    <span class="manu-vs">VS</span>
                    <img src="media/Brighton.png" alt="Brighton" class="manu-team-logo tottenham-logo">
                    <div class="manu-match-info">
                        <span>31 Mei</span>
                        <span>21:00</span>
                    </div>
                    <a href="#" class="manu-go-btn">&gt;</a>
                </article>

                <article class="manu-match-row">
                    <img src="media/premiere league.png" alt="Premier League" class="manu-league-logo">
                    <img src="media/Nottingham_Forest.png" alt="Nottingham Forest" class="manu-team-logo">
                    <span class="manu-vs">VS</span>
                    <img src="media/newcastle utd.png" alt="Newcastle United" class="manu-team-logo">
                    <div class="manu-match-info">
                        <span>7 Juni</span>
                        <span>15:30</span>
                    </div>
                    <a href="#" class="manu-go-btn">&gt;</a>
                </article>

                <article class="manu-match-row">
                    <img src="media/premiere league.png" alt="Premier League" class="manu-league-logo">
                    <img src="media/Nottingham_Forest.png" alt="Nottingham Forest" class="manu-team-logo">
                    <span class="manu-vs">VS</span>
                    <img src="media/Ipswich_Town.png" alt="Ipswich Town" class="manu-team-logo">
                    <div class="manu-match-info">
                        <span>14 Juni</span>
                        <span>18:00</span>
                    </div>
                    <a href="#" class="manu-go-btn">&gt;</a>
                </article>

            </div>
        </section>
    </main>
</body>
</html>