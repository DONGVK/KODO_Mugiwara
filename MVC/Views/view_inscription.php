<?php require('view_debut.php') ?>
<center>
  <form method="POST" action="Controller_inscription.php">
    <input type="radio" name="civilite" value="monsieur"> Monsieur
    <input type="radio" name="civilite" value="madame"> Madame
    <p>Prénom : </p>
    <input type="text" name="nom">
    <p>Mot de passe : </p>
    <input type="password" name="mdp">
    <p>Confirmer le mot de passe : </p>
    <input type="password" name="mdp1">
    <p>Date naissance</p>
    <input type="date" name="date">
    <p>Adresse mail </p>
    <input type="text" name="mail">
    <p>Confirmer l'adresse mail </p>
    <input type="text" name="mail1">
  </br>
  </br>
    <select name="nom" size="1">
      <option>Science
      <option>Litterature
      <option>Mathématique
      <option>Sport
     </select>
  </br>
  </br>
    <input type="submit" name="valide" value="M'inscrire" />
  </form>
</center>
<?php require('view_fin.php') ?>
