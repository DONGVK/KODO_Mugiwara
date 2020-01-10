<?php
  function storage($mail, $mdp, $nom){
    $_SESSION['id'] = $mail;
    $_SESSION['password'] = $mdp;
    $_SESSION['nom'] = $nom;
  }
?>
