@include('view_debut1')
  <center>
        <h1> Vous etes bien connecté sur le compte de
          <?php if(isset($_SESSION['nom'])):?>
          <?= $_SESSION['nom'] ?>
        <?php endif ?>
        </h1>
   </center>
@include('view_fin')
