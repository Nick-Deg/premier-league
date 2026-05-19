<?php 
require_once "config.php";
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brighton - Wedstrijden</title>
    <link rel="stylesheet" href="css/premier.css?v=<?= filemtime('css/premier.css') ?>">
</head>
<body class="manu-body">
    <main class="manu-page brighton-page">
        <header class="manu-topbar">
            <img src="media/meeuw.png" alt="Meeuw links" class="manu-devil">
            <img src="media/brighton.png" alt="Brighton logo" class="manu-top-logo">
            <img src="media/meeuw.png" alt="Meeuw rechts" class="manu-devil">
        </header>

        <section class="manu-content">
            <a href="Clubs.php" class="manu-back-btn">BACK</a>

            <div class="manu-fixtures" aria-label="Brighton thuiswedstrijden">
                <article class="manu-match-row">
                    <img src="media/premiere league.png" alt="Premier League" class="manu-league-logo">
                    <img src="media/brighton.png" alt="Brighton" class="manu-team-logo">
                    <span class="manu-vs">VS</span>
                    <img src="media/Ipswich_Town.png" alt="Ipswich" class="manu-team-logo">
                    <div class="manu-match-info">
                        <span>9 Mei</span>
                        <span>20:00</span>
                    </div>
                    <a href="BriIps.php" class="manu-go-btn">&gt;</a>
                </article>

                <article class="manu-match-row">
                    <img src="media/premiere league.png" alt="Premier League" class="manu-league-logo">
                    <img src="media/brighton.png" alt="Brighton" class="manu-team-logo">
                    <span class="manu-vs">VS</span>
                    <img src="media/liverpool.jpg" alt="Liverpool" class="manu-team-logo">
                    <div class="manu-match-info">
                        <span>16 Mei</span>
                        <span>18:30</span>
                    </div>
                    <a href="BriLiv.php" class="manu-go-btn">&gt;</a>
                </article>

                <article class="manu-match-row">
                    <img src="media/premiere league.png" alt="Premier League" class="manu-league-logo">
                    <img src="media/brighton.png" alt="Brighton" class="manu-team-logo">
                    <span class="manu-vs">VS</span>
                    <img src="media/Tottenham bal.png" alt="Tottenham" class="manu-team-logo to">
                    <div class="manu-match-info">
                        <span>23 Mei</span>
                        <span>21:00</span>
                    </div>
                    <a href="BriTou.php" class="manu-go-btn">&gt;</a>
                </article>

                <article class="manu-match-row">
                    <img src="media/premiere league.png" alt="Premier League" class="manu-league-logo">
                    <img src="media/brighton.png" alt="Brighton" class="manu-team-logo">
                    <span class="manu-vs">VS</span>
                    <img src="media/wolverhampton.png" alt="Wolves" class="manu-team-logo">
                    <div class="manu-match-info">
                        <span>30 Mei</span>
                        <span>16:00</span>
                    </div>
                    <a href="BriWol.php" class="manu-go-btn">&gt;</a>
                </article>

                <article class="manu-match-row">
                    <img src="media/premiere league.png" alt="Premier League" class="manu-league-logo">
                    <img src="media/brighton.png" alt="Brighton" class="manu-team-logo">
                    <span class="manu-vs">VS</span>
                    <img src="media/FC_Southampton.png" alt="Southampton" class="manu-team-logo">
                    <div class="manu-match-info">
                        <span>6 Juni</span>
                        <span>14:00</span>
                    </div>
                    <a href="BriSou.php" class="manu-go-btn">&gt;</a>
                </article>

                <article class="manu-match-row">
                    <img src="media/premiere league.png" alt="Premier League" class="manu-league-logo">
                    <img src="media/brighton.png" alt="Brighton" class="manu-team-logo">
                    <span class="manu-vs">VS</span>
                    <img src="media/Leicester_City.png" alt="Leicester" class="manu-team-logo">
                    <div class="manu-match-info">
                        <span>13 Juni</span>
                        <span>17:00</span>
                    </div>
                    <a href="BriLei.php" class="manu-go-btn">&gt;</a>
                </article>
            </div>
        </section>
    </main>
</body>
</html>