<?php @include('view_debut')  ?>
  <center>
        <p><font face="verdana">  Veuillez choisir un profil :</font></p>
    <div id="effet">
            <a href="inscription"><img class="eta" src="{{ asset('img/etablissement.png') }}"/></a>
            <div class="popopo">
              <div class="text"><a href="inscription">Etablissement</a></div>
            </div>
    </div>

    <div id="effet">
      <a href="inscription"><img class="eta" src="{{ asset('img/speaker.png') }}"/></a>
      <div class="popopo">
        <div class="text"><a href="inscription">Speaker</a></div>
      </div>
    </div>

    <div id="effet">
      <div class="popopo">
        <div class="text"><a href="inscription">Auditeur</a></div>
      </div>
      <a href="inscription"><img class="eta" src="{{ asset('img/auditeur.png') }}"/></a>
    </div>
   </center>
<?php @include('view_fin')  ?>
