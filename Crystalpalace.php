<?php 
require_once "config.php";
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crystal Palace - Wedstrijden</title>
    <link rel="stylesheet" href="css/premier.css?v=<?= filemtime('css/premier.css') ?>">
</head>
<body class="manu-body">
    <main class="manu-page crystalpalace-page">
        <header class="manu-topbar">
            <img src="media/bird.png" alt="Bird links" class="manu-devil">
            <img src="media/Crystal_Palace.png" alt="Crystal Palace logo" class="manu-top-logo">
            <img src="media/bird.png" alt="Bird rechts" class="manu-devil">
        </header>

        <section class="manu-content">
            <a href="Clubs.php" class="manu-back-btn">BACK</a>

            <div class="manu-fixtures" aria-label="Crystal Palace thuiswedstrijden">

                <article class="manu-match-row">
                    <img src="media/premiere league.png" alt="Premier League" class="manu-league-logo">
                    <img src="media/Crystal_Palace.png" alt="Crystal Palace" class="manu-team-logo">
                    <span class="manu-vs">VS</span>
                    <img src="media/Manchestercity.png" alt="Brighton" class="manu-team-logo">
                    <div class="manu-match-info">
                        <span>9 Mei</span>
                        <span>20:00</span>
                    </div>
                    <a href="cryman.php" class="manu-go-btn">&gt;</a>
                </article>

                <article class="manu-match-row">
                    <img src="media/premiere league.png" alt="Premier League" class="manu-league-logo">
                    <img src="media/Crystal_Palace.png" alt="Crystal Palace" class="manu-team-logo">
                    <span class="manu-vs">VS</span>
                    <img src="media/Brighton.png" alt="Brighton" class="manu-team-logo">
                    <div class="manu-match-info">
                        <span>16 Mei</span>
                        <span>18:30</span>
                    </div>
                    <a href="crybri.php" class="manu-go-btn">&gt;</a>
                </article>

                <article class="manu-match-row">
                    <img src="media/premiere league.png" alt="Premier League" class="manu-league-logo">
                    <img src="media/Crystal_Palace.png" alt="Crystal Palace" class="manu-team-logo">
                    <span class="manu-vs">VS</span>
                    <img src="media/Everton.png" alt="Everton" class="manu-team-logo">
                    <div class="manu-match-info">
                        <span>23 Mei</span>
                        <span>21:00</span>
                    </div>
                    <a href="cryeve.php" class="manu-go-btn">&gt;</a>
                </article>

                <article class="manu-match-row">
                    <img src="media/premiere league.png" alt="Premier League" class="manu-league-logo">
                    <img src="media/Crystal_Palace.png" alt="Crystal Palace" class="manu-team-logo">
                    <span class="manu-vs">VS</span>
                    <img src="media/AFC_Bournemouth.png" alt="Bournemouth" class="manu-team-logo">
                    <div class="manu-match-info">
                        <span>30 Mei</span>
                        <span>16:00</span>
                    </div>
                    <a href="crybou.php" class="manu-go-btn">&gt;</a>
                </article>

                <article class="manu-match-row">
                    <img src="media/premiere league.png" alt="Premier League" class="manu-league-logo">
                    <img src="media/Crystal_Palace.png" alt="Crystal Palace" class="manu-team-logo">
                    <span class="manu-vs">VS</span>
                    <img src="media/FC_Southampton.png" alt="Southampton" class="manu-team-logo tottenham-logo">
                    <div class="manu-match-info">
                        <span>6 Juni</span>
                        <span>14:00</span>
                    </div>
                    <a href="crysou.php" class="manu-go-btn">&gt;</a>
                </article>

                <article class="manu-match-row">
                    <img src="media/premiere league.png" alt="Premier League" class="manu-league-logo">
                    <img src="media/Crystal_Palace.png" alt="Crystal Palace" class="manu-team-logo">
                    <span class="manu-vs">VS</span>
                    <img src="media/Leicester_City.png" alt="Leicester City" class="manu-team-logo">
                    <div class="manu-match-info">
                        <span>13 Juni</span>
                        <span>17:00</span>
                    </div>
                    <a href="crylei.php" class="manu-go-btn">&gt;</a>
                </article>

            </div>
        </section>
    </main>
</body>
</html>