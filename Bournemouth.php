<?php 
require_once "config.php";
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bournemouth - Wedstrijden</title>
    <link rel="stylesheet" href="css/premier.css?v=<?= filemtime('css/premier.css') ?>">
</head>
<body class="manu-body">
    <main class="manu-page bournemouth-page">
        <header class="manu-topbar">
            <img src="media/bourn.png" alt="Bournemouth links" class="manu-devil">
            <img src="media/AFC_Bournemouth.png" alt="Bournemouth" class="manu-top-logo">
            <img src="media/bourn.png" alt="Bournemouth rechts" class="manu-devil">
        </header>

        <section class="manu-content">
            <a href="Clubs.php" class="manu-back-btn">BACK</a>

            <div class="manu-fixtures" aria-label="Bournemouth thuiswedstrijden">

                <article class="manu-match-row">
                    <img src="media/premiere league.png" alt="Premier League" class="manu-league-logo">
                    <img src="media/AFC_Bournemouth.png" alt="Bournemouth" class="manu-team-logo">
                    <span class="manu-vs">VS</span>
                    <img src="media/Brentford.png" alt="Brentford" class="manu-team-logo">
                    <div class="manu-match-info">
                        <span>11 Mei</span>
                        <span>16:00</span>
                    </div>
                    <a href="BouBre.php" class="manu-go-btn">&gt;</a>
                </article>

                <article class="manu-match-row">
                    <img src="media/premiere league.png" alt="Premier League" class="manu-league-logo">
                    <img src="media/AFC_Bournemouth.png" alt="Bournemouth" class="manu-team-logo">
                    <span class="manu-vs">VS</span>
                    <img src="media/Chelsea FC.png" alt="Chelsea" class="manu-team-logo">
                    <div class="manu-match-info">
                        <span>20 Mei</span>
                        <span>20:30</span>
                    </div>
                    <a href="BouChe.php" class="manu-go-btn">&gt;</a>
                </article>

                <article class="manu-match-row">
                    <img src="media/premiere league.png" alt="Premier League" class="manu-league-logo">
                    <img src="media/AFC_Bournemouth.png" alt="Bournemouth" class="manu-team-logo">
                    <span class="manu-vs">VS</span>
                    <img src="media/aston villa.png" alt="Aston villa" class="manu-team-logo">
                    <div class="manu-match-info">
                        <span>28 Mei</span>
                        <span>18:45</span>
                    </div>
                    <a href="BouAst.php" class="manu-go-btn">&gt;</a>
                </article>

                <article class="manu-match-row">
                    <img src="media/premiere league.png" alt="Premier League" class="manu-league-logo">
                    <img src="media/AFC_Bournemouth.png" alt="Bournemouth" class="manu-team-logo">
                    <span class="manu-vs">VS</span>
                    <img src="media/Manchestercity.png" alt="Manchester City" class="manu-team-logo tottenham-logo">
                    <div class="manu-match-info">
                        <span>1 Juni</span>
                        <span>21:00</span>
                    </div>
                    <a href="BouManc.php" class="manu-go-btn">&gt;</a>
                </article>

                <article class="manu-match-row">
                    <img src="media/premiere league.png" alt="Premier League" class="manu-league-logo">
                    <img src="media/AFC_Bournemouth.png" alt="Bournemouth" class="manu-team-logo">
                    <span class="manu-vs">VS</span>
                    <img src="media/FC_Southampton.png" alt="Southampton" class="manu-team-logo">
                    <div class="manu-match-info">
                        <span>8 Juni</span>
                        <span>15:00</span>
                    </div>
                    <a href="BouSou.php" class="manu-go-btn">&gt;</a>
                </article>

                <article class="manu-match-row">
                    <img src="media/premiere league.png" alt="Premier League" class="manu-league-logo">
                    <img src="media/AFC_Bournemouth.png" alt="Bournemouth" class="manu-team-logo">
                    <span class="manu-vs">VS</span>
                    <img src="media/Man united.png" alt="Manchester United" class="manu-team-logo">
                    <div class="manu-match-info">
                        <span>15 Juni</span>
                        <span>17:30</span>
                    </div>
                    <a href="BouMan.php" class="manu-go-btn">&gt;</a>
                </article>

            </div>
        </section>
    </main>
</body>
</html>