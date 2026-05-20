<?php 
require_once "config.php";
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Southampton - Wedstrijden</title>
    <link rel="stylesheet" href="css/premier.css?v=<?= filemtime('css/premier.css') ?>">
</head>
<body class="manu-body">
    <main class="manu-page southampton-page">
        <header class="manu-topbar">
            <img src="media/boomwit.png" alt="Boom links" class="manu-devil">
            <img src="media/FC_Southampton.png" alt="Southampton logo" class="manu-top-logo">
            <img src="media/boomwit.png" alt="Boom rechts" class="manu-devil">
        </header>

        <section class="manu-content">
            <a href="Clubs.php" class="manu-back-btn">BACK</a>

            <div class="manu-fixtures" aria-label="Southampton thuiswedstrijden">

                <article class="manu-match-row">
                    <img src="media/premiere league.png" alt="Premier League" class="manu-league-logo">
                    <img src="media/FC_Southampton.png" alt="Southampton" class="manu-team-logo">
                    <span class="manu-vs">VS</span>
                    <img src="media/chelsea FC.png" alt="Chelsea" class="manu-team-logo">
                    <div class="manu-match-info">
                        <span>12 Mei</span>
                        <span>16:00</span>
                    </div>
                    <a href="SouChe.php" class="manu-go-btn">&gt;</a>
                </article>

                <article class="manu-match-row">
                    <img src="media/premiere league.png" alt="Premier League" class="manu-league-logo">
                    <img src="media/FC_Southampton.png" alt="Southampton" class="manu-team-logo">
                    <span class="manu-vs">VS</span>
                    <img src="media/Man united.png" alt="Manchester United" class="manu-team-logo">
                    <div class="manu-match-info">
                        <span>18 Mei</span>
                        <span>18:30</span>
                    </div>
                    <a href="SouChe.php" class="manu-go-btn">&gt;</a>
                </article>

                <article class="manu-match-row">
                    <img src="media/premiere league.png" alt="Premier League" class="manu-league-logo">
                    <img src="media/FC_Southampton.png" alt="Southampton" class="manu-team-logo">
                    <span class="manu-vs">VS</span>
                    <img src="media/AFC_Bournemouth.png" alt="Bournemouth" class="manu-team-logo">
                    <div class="manu-match-info">
                        <span>25 Mei</span>
                        <span>20:00</span>
                    </div>
                    <a href="SouBou.php" class="manu-go-btn">&gt;</a>
                </article>

                <article class="manu-match-row">
                    <img src="media/premiere league.png" alt="Premier League" class="manu-league-logo">
                    <img src="media/FC_Southampton.png" alt="Southampton" class="manu-team-logo">
                    <span class="manu-vs">VS</span>
                    <img src="media/Everton.png" alt="Everton" class="manu-team-logo tottenham-logo">
                    <div class="manu-match-info">
                        <span>1 Juni</span>
                        <span>17:00</span>
                    </div>
                    <a href="SouEve.php" class="manu-go-btn">&gt;</a>
                </article>

                <article class="manu-match-row">
                    <img src="media/premiere league.png" alt="Premier League" class="manu-league-logo">
                    <img src="media/FC_Southampton.png" alt="Southampton" class="manu-team-logo">
                    <span class="manu-vs">VS</span>
                    <img src="media/Leicester_City.png" alt="Leicester" class="manu-team-logo">
                    <div class="manu-match-info">
                        <span>8 Juni</span>
                        <span>15:30</span>
                    </div>
                    <a href="SouLei.php" class="manu-go-btn">&gt;</a>
                </article>

                <article class="manu-match-row">
                    <img src="media/premiere league.png" alt="Premier League" class="manu-league-logo">
                    <img src="media/FC_Southampton.png" alt="Southampton" class="manu-team-logo">
                    <span class="manu-vs">VS</span>
                    <img src="media/Wolverhampton.png" alt="Wolverhampton" class="manu-team-logo">
                    <div class="manu-match-info">
                        <span>15 Juni</span>
                        <span>19:00</span>
                    </div>
                    <a href="SouWol.php" class="manu-go-btn">&gt;</a>
                </article>

            </div>
        </section>
    </main>
</body>
</html>