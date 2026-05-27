<?php

    // Auteur: Arda Yaman
    // Functie: Pagina na winnen

    require_once('../dbcon.php');

    
// Test & voorbeeld
    
    $naam = isset($_GET['naam']) && trim($_GET['naam']) !== '' ? trim($_GET['naam']) : 'Piraat';
    $score = isset($_GET['score']) ? max(0, (int) $_GET['score']) : 875;

    $naam = htmlspecialchars($naam, ENT_QUOTES, 'UTF-8');
?>


<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Overwinning</title>
    <link rel="stylesheet" href="../css/result.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pirata+One&family=Trade+Winds&display=swap" rel="stylesheet">
</head>
<body class="win_body">
    <main class="win_card">
        <h1>🪙 Ahoy! Gewonnen! 🪙</h1>
        <p class="win_name">Yo Ho Ho! <?php echo $naam; ?>, jouw aventuur is een success!</p>

        <div class="win_stats">
            <div><strong>Score:</strong> <?php echo number_format($score, 0, ',', '.'); ?></div>
        </div>

        <p>De bemanning juicht en de vlag wappert in de wind.</p>
        

        <a class="win_button" href="?naam=<?php echo urlencode(htmlspecialchars_decode($naam, ENT_QUOTES)); ?>&score=<?php echo $score; ?>e">Speel opnieuw</a>
    </main>
</body>
</html>
