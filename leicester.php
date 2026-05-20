<?php 
require_once "config.php";
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leicester City - Wedstrijden</title>
    <link rel="stylesheet" href="css/premier.css?v=<?= filemtime('css/premier.css') ?>">
</head>
<body class="manu-body">
    <main class="manu-page leicester-page">
        <header class="manu-topbar">
            <img src="media/vos.png" alt="Vos links" class="manu-devil">
            <img src="media/Leicester_City.png" alt="Leicester City logo" class="manu-top-logo">
            <img src="media/vos.png" alt="Vos rechts" class="manu-devil">
        </header>

        <section class="manu-content">
            <a href="Clubs.php" class="manu-back-btn">BACK</a>

            <div class="manu-fixtures" aria-label="Leicester City thuiswedstrijden">

                <article class="manu-match-row">
                    <img src="media/premiere league.png" alt="Premier League" class="manu-league-logo">
                    <img src="media/Leicester_City.png" alt="Leicester City" class="manu-team-logo">
                    <span class="manu-vs">VS</span>
                    <img src="media/Ipswich_Town.png" alt="Ipswich Town" class="manu-team-logo">
                    <div class="manu-match-info">
                        <span>10 Mei</span>
                        <span>16:00</span>
                    </div>
                    <a href="LeiIps.php" class="manu-go-btn">&gt;</a>
                </article>

                <article class="manu-match-row">
                    <img src="media/premiere league.png" alt="Premier League" class="manu-league-logo">
                    <img src="media/Leicester_City.png" alt="Leicester City" class="manu-team-logo">
                    <span class="manu-vs">VS</span>
                    <img src="media/Man united.png" alt="Manchester united" class="manu-team-logo">
                    <div class="manu-match-info">
                        <span>17 Mei</span>
                        <span>18:30</span>
                    </div>
                    <a href="LeiMan.php" class="manu-go-btn">&gt;</a>
                </article>

                <article class="manu-match-row">
                    <img src="media/premiere league.png" alt="Premier League" class="manu-league-logo">
                    <img src="media/Leicester_City.png" alt="Leicester City" class="manu-team-logo">
                    <span class="manu-vs">VS</span>
                    <img src="media/Chelsea FC.png" alt="Chelsea" class="manu-team-logo">
                    <div class="manu-match-info">
                        <span>24 Mei</span>
                        <span>20:00</span>
                    </div>
                    <a href="LeiChe.php" class="manu-go-btn">&gt;</a>
                </article>

                <article class="manu-match-row">
                    <img src="media/premiere league.png" alt="Premier League" class="manu-league-logo">
                    <img src="media/Leicester_City.png" alt="Leicester City" class="manu-team-logo">
                    <span class="manu-vs">VS</span>
                    <img src="media/Fulham.png" alt="Fulham" class="manu-team-logo tottenham-logo">
                    <div class="manu-match-info">
                        <span>31 Mei</span>
                        <span>21:00</span>
                    </div>
                    <a href="LeiFul.php" class="manu-go-btn">&gt;</a>
                </article>

                <article class="manu-match-row">
                    <img src="media/premiere league.png" alt="Premier League" class="manu-league-logo">
                    <img src="media/Leicester_City.png" alt="Leicester City" class="manu-team-logo">
                    <span class="manu-vs">VS</span>
                    <img src="media/FC_Southampton.png" alt="Southampton" class="manu-team-logo">
                    <div class="manu-match-info">
                        <span>7 Juni</span>
                        <span>15:00</span>
                    </div>
                    <a href="LeiSou.php" class="manu-go-btn">&gt;</a>
                </article>

                <article class="manu-match-row">
                    <img src="media/premiere league.png" alt="Premier League" class="manu-league-logo">
                    <img src="media/Leicester_City.png" alt="Leicester City" class="manu-team-logo">
                    <span class="manu-vs">VS</span>
                    <img src="media/manchestercity.png" alt="Manchester City" class="manu-team-logo">
                    <div class="manu-match-info">
                        <span>18 Juni</span>
                        <span>17:30</span>
                    </div>
                    <a href="LeiManc.php" class="manu-go-btn">&gt;</a>
                </article>

            </div>
        </section>
    </main>
</body>
</html>