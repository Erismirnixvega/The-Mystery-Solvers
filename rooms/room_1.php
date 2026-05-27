<?php


require_once('../dbcon.php');



try {
  $stmt = $conn->query("SELECT * FROM riddles WHERE roomId = 1");
  $riddles = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
  die("Databasefout: " . $e->getMessage());
}

session_start();


$_SESSION["score"] = "0";






?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Escape Room 3</title>
  <link rel="stylesheet" href="../css/style.css">
</head>

<body>
  <h1>Team: ...</h1>

  <div class="container">
    <?php foreach ($riddles as $index => $riddle) : ?>
    <div class="box box<?php echo $index + 1; ?>" onclick="openModal(<?php echo $index; ?>)"
      data-index="<?php echo $index; ?>" data-riddle="<?php echo htmlspecialchars($riddle['riddle']); ?>"
      data-answer="<?php echo htmlspecialchars($riddle['answer']); ?>">
      Box <?php echo $index + 1; ?>
    </div>
    <?php endforeach; ?>

 
  </div>

  


  <section class="overlay" id="overlay" onclick="closeModal()"></section>

  <section class="modal" id="modal">
    <h2>Escape Room Vraag</h2>
    <p id="riddle"></p>
    <form method="post" id="form" onsubmit="return checkAnswer()">
      <input type="text" id="answer" placeholder="Typ je antwoord">
      <input type="hidden" name="number" id="number"> 
      <button type="submit" onclick="checkAnswer()">Verzenden</button>
    </form>

    <?php 
          $score = '0';
          if (isset($_POST['number'])) {
             $score = $_POST['number'];
             $_SESSION['score'] = $score;
             $total = $_SESSION['score'];
             echo $total;
          }  
    ?>
    <p id="feedback"></p>

  </section>

  <script src="../js/app.js"></script>

</body>

</html>