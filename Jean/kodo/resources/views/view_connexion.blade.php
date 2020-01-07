@include('view_debut')
  <center>
        <p><font face="verdana">  Veuillez choisir un profil :</font></p>
    <div id="effet">
            <a href="inscriptiono"><img class="eta" src="{{ asset('img/etablissement.png') }}"/></a>
            <div class="popopo">
              <div class="text"><a href="inscriptiono">Etablissement</a></div>
            </div>
    </div>

    <div id="effet">
      <a href="inscriptions"><img class="eta" src="{{ asset('img/speaker.png') }}"/></a>
      <div class="popopo">
        <div class="text"><a href="inscriptions">Speaker</a></div>
      </div>
    </div>

    <div id="effet">
      <div class="popopo">
        <div class="text"><a href="/inscriptiona">Auditeur</a></div>
      </div>
      <a href="/inscriptiona"><img class="eta" src="{{ asset('img/auditeur.png') }}"/></a>
    </div>
   </center>
@include('view_fin')
