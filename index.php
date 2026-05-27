<!DOCTYPE html>
<html lang="nl">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Escape Room</title>
  <link rel="stylesheet" href="./css/index.css">
</head>

<body>

  <div class="hero">
    <h1>The Mystery Solvers</h1>

    <div class="box verhaal">
      <p>Ahoy piraat! Jij hebt een mysterieuze schatkaart gevonden op het dek van een verlaten schip. Volgens de legende ligt er een gigantische schat verborgen op een donkere, gevaarlijke, verre eiland, maar niemand die er ooit naar zocht keerde terug...</p>
      <p>Om de schat te bereiken moet je de raadsels oplossen die in je weg komen. Los de raadsels op, ontcijfer de codes en volg de kaart. De zee wacht op niemand. Durf jij het aan? 🏴‍☠️</p>
    </div>

    <div class="box regels">
      <p>📋 De regels</p>
      <p>⚔️ Los elk raadsel op om verder te komen. Zonder antwoord geen doorgang.</p>
      <p>🕯️ Zit je vast? Gebruik een hint, maar gebruik ze spaarzaam, piraten vragen nooit om hulp.</p>
      <p>🔒 Antwoorden zijn niet hoofdlettergevoelig, maar wees precies!</p>
      <p>⏳ De timer tikt genadeloos door. Als de tijd op is, is je kans voorbij.</p>
    </div>

    <div class="keuze">
      <button class="btn deel-btn" onclick="kiesDeel(1)">Deel 1</button>
      <button class="btn deel-btn" onclick="kiesDeel(2)">Deel 2</button>
    </div>

    <button class="btn begin" onclick="beginSpel()">Begin Spel</button>

  </div>

  <script>
    let gekozenDeel = null;

    function kiesDeel(deel) {
      gekozenDeel = deel;
      document.querySelectorAll('.deel-btn').forEach(btn => btn.classList.remove('actief'));
      event.target.classList.add('actief');
    }

    function beginSpel() {
      if (gekozenDeel === 1) window.location.href = './rooms/room_1.php';
      else if (gekozenDeel === 2) window.location.href = './rooms/room_2.php';
      else alert('Kies eerst deel 1 of deel 2!');
    }
  </script>

</body>
</html>