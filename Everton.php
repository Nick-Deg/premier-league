<?php 
require_once "config.php";
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Everton - Wedstrijden</title>
    <link rel="stylesheet" href="css/premier.css?v=<?= filemtime('css/premier.css') ?>">
</head>
<body class="manu-body">
    <main class="manu-page everton-page">
        <header class="manu-topbar">
            <img src="media/castle.webp" alt="Castle links" class="manu-devil">
            <img src="media/Everton.png" alt="Everton logo" class="manu-top-logo">
            <img src="media/castle.webp" alt="Castle rechts" class="manu-devil">
        </header>

        <section class="manu-content">
            <a href="Clubs.php" class="manu-back-btn">BACK</a>

            <div class="manu-fixtures" aria-label="Everton thuiswedstrijden">

                <article class="manu-match-row">
                    <img src="media/premiere league.png" alt="Premier League" class="manu-league-logo">
                    <img src="media/Everton.png" alt="Everton" class="manu-team-logo">
                    <span class="manu-vs">VS</span>
                    <img src="media/Leicester_City.png" alt="Leicester" class="manu-team-logo">
                    <div class="manu-match-info">
                        <span>9 Mei</span>
                        <span>20:00</span>
                    </div>
                    <a href="EveLei.php" class="manu-go-btn">&gt;</a>
                </article>

                <article class="manu-match-row">
                    <img src="media/premiere league.png" alt="Premier League" class="manu-league-logo">
                    <img src="media/Everton.png" alt="Everton" class="manu-team-logo">
                    <span class="manu-vs">VS</span>
                    <img src="media/arsenal.png" alt="Arsenal" class="manu-team-logo">
                    <div class="manu-match-info">
                        <span>16 Mei</span>
                        <span>18:30</span>
                    </div>
                    <a href="EveArs.php" class="manu-go-btn">&gt;</a>
                </article>

                <article class="manu-match-row">
                    <img src="media/premiere league.png" alt="Premier League" class="manu-league-logo">
                    <img src="media/Everton.png" alt="Everton" class="manu-team-logo">
                    <span class="manu-vs">VS</span>
                    <img src="media/west ham.png" alt="West Ham United" class="manu-team-logo">
                    <div class="manu-match-info">
                        <span>23 Mei</span>
                        <span>21:00</span>
                    </div>
                    <a href="EveWes.php" class="manu-go-btn">&gt;</a>
                </article>

                <article class="manu-match-row">
                    <img src="media/premiere league.png" alt="Premier League" class="manu-league-logo">
                    <img src="media/Everton.png" alt="Everton" class="manu-team-logo">
                    <span class="manu-vs">VS</span>
                    <img src="media/newcastle utd.png" alt="Newcastle United" class="manu-team-logo tottenham-logo">
                    <div class="manu-match-info">
                        <span>30 Mei</span>
                        <span>16:00</span>
                    </div>
                    <a href="EveNew.php" class="manu-go-btn">&gt;</a>
                </article>

                <article class="manu-match-row">
                    <img src="media/premiere league.png" alt="Premier League" class="manu-league-logo">
                    <img src="media/Everton.png" alt="Everton" class="manu-team-logo">
                    <span class="manu-vs">VS</span>
                    <img src="media/Wolverhampton.png" alt="Wolves" class="manu-team-logo">
                    <div class="manu-match-info">
                        <span>6 Juni</span>
                        <span>14:00</span>
                    </div>
                    <a href="EveWol.php" class="manu-go-btn">&gt;</a>
                </article>

                <article class="manu-match-row">
                    <img src="media/premiere league.png" alt="Premier League" class="manu-league-logo">
                    <img src="media/Everton.png" alt="Everton" class="manu-team-logo">
                    <span class="manu-vs">VS</span>
                    <img src="media/Man united.png" alt="Manchester United" class="manu-team-logo">
                    <div class="manu-match-info">
                        <span>13 Juni</span>
                        <span>17:00</span>
                    </div>
                    <a href="EveMan.php" class="manu-go-btn">&gt;</a>
                </article>

            </div>
        </section>
    </main>
</body>
</html>