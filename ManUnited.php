<?php
require_once "config.php";
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manchester United - Wedstrijden</title>
    <link rel="stylesheet" href="css/premier.css?v=<?= filemtime('css/premier.css') ?>">
</head>
<body class="manu-body">
    <main class="manu-page">
        <header class="manu-topbar">
            <img src="media/Red Devil.png" alt="Red Devil links" class="manu-devil">
            <img src="media/Man united.png" alt="Manchester United logo" class="manu-top-logo">
            <img src="media/Red Devil.png" alt="Red Devil rechts" class="manu-devil">
        </header>

        <section class="manu-content">
            <a href="Clubs.php" class="manu-back-btn">BACK</a>

            <div class="manu-fixtures" aria-label="Manchester United thuiswedstrijden">
                <article class="manu-match-row">
                    <img src="media/premiere league.png" alt="Premier League" class="manu-league-logo">
                    <img src="media/Man united.png" alt="Manchester United" class="manu-team-logo">
                    <span class="manu-vs">VS</span>
                    <img src="media/Liverpool.jpg" alt="Liverpool" class="manu-team-logo">
                    <div class="manu-match-info">
                        <span>3 Mei</span>
                        <span>16:00</span>
                    </div>
                    <a href="manliv.php" class="manu-go-btn">&gt;</a>
                </article>

                <article class="manu-match-row">
                    <img src="media/premiere league.png" alt="Premier League" class="manu-league-logo">
                    <img src="media/Man united.png" alt="Manchester United" class="manu-team-logo">
                    <span class="manu-vs">VS</span>
                    <img src="media/arsenal.png" alt="Arsenal" class="manu-team-logo">
                    <div class="manu-match-info">
                        <span>18 Mei</span>
                        <span>17:30</span>
                    </div>
                    <a href="ManArs.php" class="manu-go-btn">&gt;</a>
                </article>

                <article class="manu-match-row">
                    <img src="media/premiere league.png" alt="Premier League" class="manu-league-logo">
                    <img src="media/Man united.png" alt="Manchester United" class="manu-team-logo">
                    <span class="manu-vs">VS</span>
                    <img src="media/Chelsea FC.png" alt="Chelsea" class="manu-team-logo">
                    <div class="manu-match-info">
                        <span>24 Mei</span>
                        <span>20:00</span>
                    </div>
                    <a href="ManChe.php" class="manu-go-btn">&gt;</a>
                </article>

                <article class="manu-match-row">
                    <img src="media/premiere league.png" alt="Premier League" class="manu-league-logo">
                    <img src="media/Man united.png" alt="Manchester United" class="manu-team-logo">
                    <span class="manu-vs">VS</span>
                    <img src="media/Manchestercity.png" alt="Manchester City" class="manu-team-logo">
                    <div class="manu-match-info">
                        <span>2 Juni</span>
                        <span>15:00</span>
                    </div>
                    <a href="ManManc.php" class="manu-go-btn">&gt;</a>
                </article>

                <article class="manu-match-row">
                    <img src="media/premiere league.png" alt="Premier League" class="manu-league-logo">
                    <img src="media/Man united.png" alt="Manchester United" class="manu-team-logo">
                    <span class="manu-vs">VS</span>
                    <img src="media/newcastle utd.png" alt="Newcastle United" class="manu-team-logo">
                    <div class="manu-match-info">
                        <span>9 Juni</span>
                        <span>14:00</span>
                    </div>
                    <a href="ManNew.php" class="manu-go-btn">&gt;</a>
                </article>

                <article class="manu-match-row">
                    <img src="media/premiere league.png" alt="Premier League" class="manu-league-logo">
                    <img src="media/Man united.png" alt="Manchester United" class="manu-team-logo">
                    <span class="manu-vs">VS</span>
                    <img src="media/tot.png" alt="Tottenham Hotspur" class="manu-team-logo">
                    <div class="manu-match-info">
                        <span>16 Juni</span>
                        <span>18:30</span>
                    </div>
                    <a href="ManTot.php" class="manu-go-btn">&gt;</a>
                </article>
            </div>
        </section>
    </main>
</body>
</html>
