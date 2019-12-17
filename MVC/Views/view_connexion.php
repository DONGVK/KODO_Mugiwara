<?php require('view_debut.php') ?>
  <center>
        <p><font face="verdana">  Veuillez choisir un profil :</font></p>
    <div id="effet">
            <a href="?controller=inscription"><img class="eta" src="Content/img/etablissement.png"/></a>
            <div class="popopo">
              <div class="text"><a href="?controller=inscription">Etablissement</a></div>
            </div>
    </div>

    <div id="effet">
      <a href="?controller=inscription"><img class="eta" src="Content/img/speaker.png"/></a>
      <div class="popopo">
        <div class="text"><a href="?controller=inscription">Speaker</a></div>
      </div>
    </div>

    <div id="effet">
      <div class="popopo">
        <div class="text"><a href="?controller=inscription">Auditeur</a></div>
      </div>
      <a href="?controller=inscription"><img class="eta" src="Content/img/auditeur.png"/></a>
    </div>
   </center>
<?php require('view_fin.php') ?>
