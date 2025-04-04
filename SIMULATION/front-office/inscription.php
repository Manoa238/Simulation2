<?php
include '../include/config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link rel="stylesheet" href="../assets/css/styles.css">
</head>
<body>
    <header>
    <div class="container" style="border-radius:30px">
      <div class="title" style="font-weight:bold;">Inscription</div>
      <form action="../action/insertion_user.php" method="post" enctype="multipart/form-data" >
       <div class="user-details">
            <div class="input-box">
                <h3 id="textVakina1" class="details" style="font-weight:normal;"> Nom </h3>
                <input type="text" name="Nom" required style="height:40px">
            </div>
            <div class="input-box">
                <h3 id="textVakina2" class="details" style="font-weight:normal;"> Prenom </h3>
                <input type="text" name="Prenom" style="height:40px" required>
            </div>
            <div class="input-box">
                <h3 id="textVakina3" class="details" style="font-weight:normal;"> Mot de passe</h3>
                <input type="text" name="Mdp" style="height:40px" required>
            </div>
            <div class="input-box">
                <h3 id="textVakina4" class="details" style="font-weight:normal;"> Répeter le mot de passe</h3>
                <input type="text" name="Mdp" style="height:40px" required>
            </div>
            <div class="input-box">
                <h3 id="textVakina5" class="details" style="font-weight:normal;"> Mail</h3>
                <input type="text" name="Email" style="height:40px" required>
            </div>
            <div class="input-box">
                <h3 id="textVakina6" class="details" style="font-weight:normal;"> Telephone</h3>
                <input type="text" name="Phone" style="height:40px" required>
            </div>
        </div>
        <div class="gender-details">
            <h3 class="gender-title" style="font-weight:normal;"; >Choisir votre genre</h3>
            <div class="category">
            <select class="category" name="Gender" style="margin-top:13px;width: 200px;border-radius: 30px;height:30px; border: 2px solid #1A76D1;">
                <option id="textVakina7">Femme</option>
                <option id="textVakina8">Homme</option>
            </select>
        </div>
        <div class="button" style="margin-top: 29px; width: 100%; max-width: 170px; height: auto;">
       <div class="category" style="display: flex; justify-content: space-between; align-items: center; gap: 10px;">
        <button type="submit" name="inscription" style="height: 50px; padding-left: 25px; padding-right: 25px; width: 100%; outline: none; color: #fff; border: none; font-size: 16px; font-weight: 500; letter-spacing: 1px; background: linear-gradient(-135deg, #a8d0f8, #1A76D1); border-radius: 30px;">
            S'inscrire
        </button>
        <div style="display: flex; gap: 10px;">
            <h3 id="lire-btn" style="height: 40px; padding-left: 25px; padding-right: 25px; background: linear-gradient(-135deg, #a8d0f8, #1A76D1); border-radius: 30px; font-size: 18px; display: flex; align-items: center; justify-content: center;">🔊</h3>
            <h3 id="lire-btn" style="height: 40px; padding-left: 25px; padding-right: 25px; background: linear-gradient(-135deg, #a8d0f8, #1A76D1); border-radius: 30px; font-size: 18px; display: flex; align-items: center; justify-content: center;">🎙</h3>
        </div>
        </div>
      </div>
    </div>   
    </form>
    </div>
<script>
    document.getElementById('lire-btn').addEventListener('click', function() {
        var texte1 = document.getElementById('textVakina1').innerText;
        var texte2 = document.getElementById('textVakina2').innerText;
        var texte3 = document.getElementById('textVakina3').innerText;
        var texte4 = document.getElementById('textVakina4').innerText;
        var texte5 = document.getElementById('textVakina5').innerText;
        var texte6 = document.getElementById('textVakina6').innerText;
        var texte7 = document.getElementById('textVakina7').innerText;
        var texte8 = document.getElementById('textVakina8').innerText;
        var syntheseVocale = window.speechSynthesis;
        
        var voix1 = new SpeechSynthesisUtterance(texte1);
        voix1.lang = 'fr-FR';  // Choisissez la langue (ici, le français)
        syntheseVocale.speak(voix1);
        var voix2 = new SpeechSynthesisUtterance(texte2);
        voix1.lang = 'fr-FR';  // Choisissez la langue (ici, le français)
        syntheseVocale.speak(voix2);
        var voix3 = new SpeechSynthesisUtterance(texte3);
        voix1.lang = 'fr-FR';  // Choisissez la langue (ici, le français)
        syntheseVocale.speak(voix3);
        var voix4 = new SpeechSynthesisUtterance(texte4);
        voix1.lang = 'fr-FR';  // Choisissez la langue (ici, le français)
        syntheseVocale.speak(voix4);
        var voix5 = new SpeechSynthesisUtterance(texte5);
        voix1.lang = 'fr-FR';  // Choisissez la langue (ici, le français)
        syntheseVocale.speak(voix5);
        var voix6 = new SpeechSynthesisUtterance(texte6);
        voix1.lang = 'fr-FR';  // Choisissez la langue (ici, le français)
        syntheseVocale.speak(voix6);
        var voix7 = new SpeechSynthesisUtterance(texte7);
        voix1.lang = 'fr-FR';  // Choisissez la langue (ici, le français)
        syntheseVocale.speak(voix7);
        var voix8 = new SpeechSynthesisUtterance(texte8);
        voix1.lang = 'fr-FR';  // Choisissez la langue (ici, le français)
        syntheseVocale.speak(voix8);
    });
</script>
</body>
</html>