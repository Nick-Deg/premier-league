<?php 
require_once "config.php";
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wolves - Wedstrijden</title>
    <link rel="stylesheet" href="css/premier.css?v=<?= filemtime('css/premier.css') ?>">
</head>
<body class="manu-body">
    <main class="manu-page wolves-page">
        <header class="manu-topbar">
            <img src="media/wolves.png" alt="Wolves links" class="manu-devil">
            <img src="media/Wolverhampton.png" alt="Wolves logo" class="manu-top-logo">
            <img src="media/wolves.png" alt="Wolves rechts" class="manu-devil">
        </header>

        <section class="manu-content">
            <a href="Clubs.php" class="manu-back-btn">BACK</a>

            <div class="manu-fixtures" aria-label="Wolves thuiswedstrijden">
                <article class="manu-match-row">
                    <img src="media/premiere league.png" alt="Premier League" class="manu-league-logo">
                    <img src="media/Wolverhampton.png" alt="Wolves" class="manu-team-logo">
                    <span class="manu-vs">VS</span>
                    <img src="media/Nottingham_Forest.png" alt="Nottingham Forest" class="manu-team-logo">
                    <div class="manu-match-info">
                        <span>9 Mei</span>
                        <span>20:00</span>
                    </div>
                    <a href="WolNot.php" class="manu-go-btn">&gt;</a>
                </article>

                <article class="manu-match-row">
                    <img src="media/premiere league.png" alt="Premier League" class="manu-league-logo">
                    <img src="media/Wolverhampton.png" alt="Wolves" class="manu-team-logo">
                    <span class="manu-vs">VS</span>
                    <img src="media/AFC_Bournemouth.png" alt="Bournemouth" class="manu-team-logo">
                    <div class="manu-match-info">
                        <span>16 Mei</span>
                        <span>18:30</span>
                    </div>
                    <a href="WolBou.php" class="manu-go-btn">&gt;</a>
                </article>

                <article class="manu-match-row">
                    <img src="media/premiere league.png" alt="Premier League" class="manu-league-logo">
                    <img src="media/Wolverhampton.png" alt="Wolves" class="manu-team-logo">
                    <span class="manu-vs">VS</span>
                    <img src="media/aston villa.png" alt="Aston Villa" class="manu-team-logo">
                    <div class="manu-match-info">
                        <span>23 Mei</span>
                        <span>21:00</span>
                    </div>
                    <a href="WolAst.php" class="manu-go-btn">&gt;</a>
                </article>

                <article class="manu-match-row">
                    <img src="media/premiere league.png" alt="Premier League" class="manu-league-logo">
                    <img src="media/Wolverhampton.png" alt="Tottenham" class="manu-team-logo">
                    <span class="manu-vs">VS</span>
                    <img src="media/brighton.png" alt="Brighton" class="manu-team-logo">
                    <div class="manu-match-info">
                        <span>30 Mei</span>
                        <span>16:00</span>
                    </div>
                    <a href="WolBri.php" class="manu-go-btn">&gt;</a>
                </article>

                <article class="manu-match-row">
                    <img src="media/premiere league.png" alt="Premier League" class="manu-league-logo">
                    <img src="media/Wolverhampton.png" alt="Wolves" class="manu-team-logo">
                    <span class="manu-vs">VS</span>
                    <img src="media/tot.png" alt="Tottenham" class="manu-team-logo tottenham-logo">
                    <div class="manu-match-info">
                        <span>6 Juni</span>
                        <span>14:00</span>
                    </div>
                    <a href="WolTot.php" class="manu-go-btn">&gt;</a>
                </article>

                <article class="manu-match-row">
                    <img src="media/premiere league.png" alt="Premier League" class="manu-league-logo">
                    <img src="media/Wolverhampton.png" alt="Wolves" class="manu-team-logo">
                    <span class="manu-vs">VS</span>
                    <img src="media/manchestercity.png" alt="Manchester City" class="manu-team-logo">
                    <div class="manu-match-info">
                        <span>13 Juni</span>
                        <span>17:00</span>
                    </div>
                    <a href="WolManc.php" class="manu-go-btn">&gt;</a>
                </article>
            </div>
        </section>
    </main>
</body>
</html>