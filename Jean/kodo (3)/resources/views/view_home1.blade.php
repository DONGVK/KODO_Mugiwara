@include('view_debut1')
  <center>
        <h1>Bienvenue dans la page Test du groupe Mugiwara !
          <?php if(isset($_SESSION['nom'])):?>
            <?= $_SESSION['nom'] ?>
          <?php endif ?>
      </h1>
   </center>
@include('view_fin')
