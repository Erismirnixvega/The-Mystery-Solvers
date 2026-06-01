let score = 0;
let room = 1;


// Deze functie opent de modal en toont de vraag
function openModal(index) {
  // Zoek het element met de class 'box' en het bijbehorende data-index
  let box = document.querySelector(`.box[data-index='${index}']`);

  // Haal de vraag en het juiste antwoord uit de dataset van de box
  let riddleText = box.dataset.riddle;
  let correctAnswer = box.dataset.answer;

  // Zet de vraagtekst in het modalvenster
  document.getElementById('riddle').innerText = riddleText;

  // Zet het correcte antwoord in de modal, zodat we het later kunnen vergelijken
  document.getElementById('modal').dataset.answer = correctAnswer;

  // Maak het antwoordveld leeg
  document.getElementById('answer').value = '';

  // Toon de overlay en de modal door de display-stijl te veranderen naar 'block'
  document.getElementById('overlay').style.display = 'block';
  document.getElementById('modal').style.display = 'block';
}

// Deze functie sluit de modal en de overlay
function closeModal() {
  // Zet de overlay en modal weer op 'none' zodat ze niet meer zichtbaar zijn
  document.getElementById('overlay').style.display = 'none';
  document.getElementById('modal').style.display = 'none';

  // Maak de feedback tekst leeg
  document.getElementById('feedback').innerText = '';
  
}

// Deze functie controleert of het ingevoerde antwoord correct is
function checkAnswer(index) {

  let box = document.querySelector(`.box${room}`);

  // Haal het antwoord van de gebruiker op uit het invoerveld en verwijder onnodige spaties
  let userAnswer = document.getElementById('answer').value.trim();

  // Haal het juiste antwoord op uit de modal
  let correctAnswer = document.getElementById('modal').dataset.answer;

  // Haal het feedback element op om de gebruiker te informeren
  let feedback = document.getElementById('feedback');


  

  // Vergelijk het antwoord van de gebruiker met het juiste antwoord (hoofdlettergevoeligheid negeren)
  if (userAnswer.toLowerCase() === correctAnswer.toLowerCase()) {
    // Als het antwoord juist is, geef positieve feedback

    let addedscore = score += Math.floor(Math.random() * 100) + 50;
   
    feedback.innerText = 'Correct! Goed gedaan!';
    feedback.style.color = 'green';


    // POST request maken via XMLHTTPRequest 

    let datatoSend = "variableName=" + encodeURIComponent(addedscore);
    let xhr = new XMLHttpRequest();
    
    xhr.open("POST", "room_1.php", true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

    xhr.onreadystatechange = function () {
      if (xhr.readyState === XMLHttpRequest.DONE) {
          if (xhr.status === 200) {
                console.log(xhr.responseText);
          }
          else {
              console.error("Error:", xhr.status);
          }
      }
    }
    xhr.send(datatoSend);

    // Sluit de modal na 1 seconde
    setTimeout(closeModal, 1000);

    room++

    box.remove();

    function controlScore() {
      if (room === 4 && addedscore >= 200) {
        window.location.href = "../result/win.php";
      }
      else if (room === 4 && addedscore <= 200) {
        window.location.href = "../result/lose.php";
      }
    }
    

    // Werkt beter dan setTimeout()
    const delay = (ms) => new Promise(resolve => setTimeout(resolve, ms));
    async function startProcess() {
      await delay(1000); 
      controlScore();
      
    }
    startProcess();
    
  } 


  else {

    let subtractedscore = score -= Math.floor(Math.random() * 50) - 1;
   

    // Als het antwoord fout is, geef negatieve feedback
    feedback.innerText = 'Fout, probeer opnieuw!';
    feedback.style.color = 'red';

    let datatoSend = "variableName=" + encodeURIComponent(subtractedscore);
    let xhr = new XMLHttpRequest();

    xhr.open("POST", "room_1.php", true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

    xhr.onreadystatechange = function () {
      if (xhr.readyState === XMLHttpRequest.DONE) {
          if (xhr.status === 200) {
                console.log(xhr.responseText);
          }
          else {
              console.error("Error:", xhr.status);
          }
      }
    }
    xhr.send(datatoSend);
    
    
  }
}
