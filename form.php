<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Formulaire de contact</title>
</head>
<body>
<h1>Formulaire de contact</h1>
<form action="/thanks.php" method="post">
   
    <div>
      <label  for="nom">Nom :</label>
      <input  type="text"  id="nom"  name="user_name">
    </div>
    <div>
    <label for="phone">Enter your phone number:</label>

    <input type="tel" id="phone" name="telephone"
      placeholder="01 23 45 67 89">
       required>
    </div>
    <div>
      <label  for="courriel">Courriel :</label>
        <input  type="email"  id="courriel"  name="user_email">
    </div>
    <div>
    <SELECT name="sujet" size="1">
    <OPTION>Prendre un RDV 
    <OPTION>Déplacer un RDV
    <OPTION>Annuler un RDV
    <OPTION>Réclamation
    </SELECT>
    </div>
    <div>
      <label  for="message">Message :</label>
      <textarea  id="message"  name="user_message"></textarea>
    </div>
    <div  class="button">
      <button  type="submit">Envoyer votre message</button>
    </div>
  </form>
</body>
</html>
<?php
?>
