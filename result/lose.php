<?php

    // Auteur: Arda Yaman
    // Functie: Pagina na verliezen

    session_start();

    $score = $_SESSION['score'];

// Test & voorbeeld

$naam = 'Piraat';


$naam = htmlspecialchars($naam, ENT_QUOTES, 'UTF-8');
?>


<!DOCTYPE html>
<html lang="nl">
<head>
    <link rel="stylesheet" href="../css/result.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pirata+One&family=Trade+Winds&display=swap" rel="stylesheet">
    <title>Verloren</title>
</head>
<body class="lose_body">
    <main class="lose_card">
        <h1>☠️ De zee eist haar tol... ☠️</h1>
        <p class="lose_name">Arrgh! <?php echo $naam; ?>, jouw avontuur eindigt hier helaas!</p>

        <div class="lose_stats">
            <div><strong>Score verloren:</strong> <?php echo number_format($score, 0, ',', '.'); ?></div>
        </div>

        <p>De bemanning zingt een droevige piratenmelodie in de nacht.</p>

        <a class="lose_button" href="../rooms/room_1.php">Probeer opnieuw</a>
    </main>
</body>
</html>
