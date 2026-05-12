<?php 
require_once "config.php";
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ipswich Town - Wedstrijden</title>
    <link rel="stylesheet" href="css/premier.css?v=<?= filemtime('css/premier.css') ?>">
</head>
<body class="manu-body">
    <main class="manu-page ipswich-page">
        <header class="manu-topbar">
            <img src="media/paardwit.png" alt="Paard links" class="manu-devil">
            <img src="media/ipswich_Town.png" alt="Ipswich Town logo" class="manu-top-logo">
            <img src="media/paardwit.png" alt="Paard rechts" class="manu-devil">
        </header>

        <section class="manu-content">
            <a href="Clubs.php" class="manu-back-btn">BACK</a>

            <div class="manu-fixtures" aria-label="Ipswich Town thuiswedstrijden">

                <article class="manu-match-row">
                    <img src="media/premiere league.png" alt="Premier League" class="manu-league-logo">
                    <img src="media/ipswich_Town.png" alt="Ipswich Town" class="manu-team-logo">
                    <span class="manu-vs">VS</span>
                    <img src="media/AFC_Bournemouth.png" alt="Bournemouth" class="manu-team-logo">
                    <div class="manu-match-info">
                        <span>11 Mei</span>
                        <span>15:00</span>
                    </div>
                    <a href="#" class="manu-go-btn">&gt;</a>
                </article>

                <article class="manu-match-row">
                    <img src="media/premiere league.png" alt="Premier League" class="manu-league-logo">
                    <img src="media/ipswich_Town.png" alt="Ipswich Town" class="manu-team-logo">
                    <span class="manu-vs">VS</span>
                    <img src="media/Everton.png" alt="Everton" class="manu-team-logo">
                    <div class="manu-match-info">
                        <span>18 Mei</span>
                        <span>17:30</span>
                    </div>
                    <a href="#" class="manu-go-btn">&gt;</a>
                </article>

                <article class="manu-match-row">
                    <img src="media/premiere league.png" alt="Premier League" class="manu-league-logo">
                    <img src="media/ipswich_Town.png" alt="Ipswich Town" class="manu-team-logo">
                    <span class="manu-vs">VS</span>
                    <img src="media/FC_Southampton.png" alt="Southampton" class="manu-team-logo">
                    <div class="manu-match-info">
                        <span>24 Mei</span>
                        <span>20:00</span>
                    </div>
                    <a href="#" class="manu-go-btn">&gt;</a>
                </article>

                <article class="manu-match-row">
                    <img src="media/premiere league.png" alt="Premier League" class="manu-league-logo">
                    <img src="media/ipswich_Town.png" alt="Ipswich Town" class="manu-team-logo">
                    <span class="manu-vs">VS</span>
                    <img src="media/Liverpool.jpg" alt="Liverpool" class="manu-team-logo">
                    <div class="manu-match-info">
                        <span>31 Mei</span>
                        <span>16:30</span>
                    </div>
                    <a href="#" class="manu-go-btn">&gt;</a>
                </article>

                <article class="manu-match-row">
                    <img src="media/premiere league.png" alt="Premier League" class="manu-league-logo">
                    <img src="media/ipswich_Town.png" alt="Ipswich Town" class="manu-team-logo">
                    <span class="manu-vs">VS</span>
                    <img src="media/arsenal.png" alt="Arsenal" class="manu-team-logo">
                    <div class="manu-match-info">
                        <span>7 Juni</span>
                        <span>14:00</span>
                    </div>
                    <a href="#" class="manu-go-btn">&gt;</a>
                </article>

                <article class="manu-match-row">
                    <img src="media/premiere league.png" alt="Premier League" class="manu-league-logo">
                    <img src="media/ipswich_Town.png" alt="Ipswich Town" class="manu-team-logo">
                    <span class="manu-vs">VS</span>
                    <img src="media/manchestercity.png" alt="Manchester City" class="manu-team-logo">
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