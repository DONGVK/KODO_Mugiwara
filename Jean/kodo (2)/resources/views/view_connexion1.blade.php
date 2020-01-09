<?php session_start(); ?>
@include('view_debut')
  <center>
    <?php if( !empty($msg) ): ?>
       {{$msg}}
    <?php endif ?>
        <form method="POST" action='\connexioni'>
          @csrf
          {{ csrf_field() }}
          <label><p> Adresse mail : </p></label>
          <input type="email" name=mail required>
          <label><p> Mot de passe </p></label>
          <input type="password" name="mdp" required>
          <br/>
          <br/>
          <input type="submit" name="Connexion" required>
        </form>
   </center>
@include('view_fin')
