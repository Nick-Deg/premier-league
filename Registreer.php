<?php
require_once "config.php";
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account Maken</title>
    <link rel="stylesheet" href="css/premier.css?v=10">
</head>
<body class="login-body">
    <main class="login-page">
        <img src="media/Passaro logo.png" alt="Passaro logo" class="login-passaro">

        <img src="media/lion.png" alt="Premier League lion links" class="login-lion login-lion-left">
        <img src="media/lion.png" alt="Premier League lion rechts" class="login-lion login-lion-right">

        <section class="login-card-shell">
            <a href="Home.php" class="login-back-btn">BACK</a>

            <div class="login-card">
                <div class="login-brand-row">
                    <img src="media/premiere league.png" alt="Premier League" class="login-brand-pl">
                    <img src="media/barclays.png" alt="Barclays" class="login-brand-barclays">
                </div>

                <div class="login-inner">
                    <h1 class="login-title">ACCOUNT MAKEN</h1>
                    <form action="Registreer.php" method="post" class="login-form">
                        <input type="text" name="username" class="login-input" aria-label="Gebruikersnaam" placeholder="Gebruikersnaam" required>
                        <input type="password" name="password" class="login-input" aria-label="Wachtwoord" placeholder="Wachtwoord" required>
                        <button type="submit" class="login-submit-btn">AANMAKEN</button>
                    </form>
                </div>
            </div>
        </section>
    </main>
</body>
</html>
