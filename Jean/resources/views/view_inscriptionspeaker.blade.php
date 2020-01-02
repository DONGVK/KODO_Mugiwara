@include('view_debut')
<script type="text/javascript">
          //<!--
          function change_onglet(name){
            document.getElementById('onglet_'+anc_onglet).className = 'etape';
            document.getElementById('onglet_'+name).className = 'etape1';
            document.getElementById('contenu_onglet_'+anc_onglet).style.display = 'none';
            document.getElementById('contenu_onglet_'+name).style.display = 'block';
            anc_onglet = name;
          }

          //-->
  </script>
  <script src="https://maps.googleapis.com/maps/api/js?libraries=places&amp;key=AIzaSyBkIYrMgT4I_g2G720qgi9ScVgxRUZYvJo" type="text/javascript"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBkIYrMgT4I_g2G720qgi9ScVgxRUZYvJo&libraries=places&callback=initAutocomplete"async defer></script>
  <script>
      function initialize() {
                var input = document.getElementById('searchTextField');
                var options = {
                  types: ['geocode'],
                  componentRestrictions: {country: 'fr'}
                };

                autocomplete = new google.maps.places.Autocomplete(input, options);

      }
      google.maps.event.addDomListener(window, 'load', initialize);
    </script>

    <script>
        function initialize() {
                  var input = document.getElementById('searchTextField');
                  var options = {
                    types: ['geocode'],
                    componentRestrictions: {country: 'fr'}
                  };

                  autocomplete = new google.maps.places.Autocomplete(input, options);

        }
        google.maps.event.addDomListener(window, 'load', initialize);
      </script>
      <script src="https://www.google.com/recaptcha/api.js"></script>

<center>
  <div>
    <span id="onglet_etape1" class="etape">Etape 1</span>
    <span id="onglet_etape2" class="etape">Etape 2</span>
    <span id="onglet_etape3" class="etape">Etape 3</span>
  </div>

  <div id="contenu_onglet_etape1" class="contenu_onglet">
    <form method="POST" action="Controller_inscription.php">
      <input type="radio" name="civilite" value="Mr"> Monsieur
      <input type="radio" name="civilite" value="Mme"> Madame
      <input type="radio" name="civilite" value="Dr"> Docteur
      <input type="radio" name="civilite" value="Me"> Maître
      <input type="radio" name="civilite" value="Pr"> Professeur
      <p>Nom : </p>
      <input type="text" name="nom">
      <p>Prénom : </p>
      <input type="text" name="prenom">
      <p>Date naissance</p>
      <input type="date" name="date">
      <p>Adresse</p>
      <input id="searchTextField" name=addresse type="text" size="50">
      <p> Etablissement </p>
      <input type="text" name="etablissement">
    </form>
    </br>
    </br>
    <span onclick="javascript:change_onglet('etape2');" id="onglet_etape2" class="onglet_0 onglet">Continuer</span>
  </div>

  <div id="contenu_onglet_etape2" class="contenu_onglet">
    <form method="POST" action="Controller_inscription.php">
      <p>Adresse mail </p>
      <input type="text" name="mail">
      <p>Confirmer l'adresse mail </p>
      <input type="text" name="mail1">
      <p>Mot de passe : </p>
      <input type="password" name="mdp">
      <p>Confirmer le mot de passe : </p>
      <input type="password" name="mdp1">
    </form>
  </br>
  <span onclick="javascript:change_onglet('etape1');" id="onglet_etape2" class="onglet_0 onglet">Précédent</span>
  <span onclick="javascript:change_onglet('etape3');" id="onglet_etape2" class="onglet_0 onglet">Continuer</span>
  </div>

  <div id="contenu_onglet_etape3" class="contenu_onglet">
    <form method="POST" action="Controller_inscription.php">
      <select name="theme" size="1">
        <option>Science
        <option>Litterature
        <option>Mathématique
        <option>Sport
      </select>
      </br>
      </br>
      <span onclick="javascript:change_onglet('etape2');" id="onglet_etape2" class="onglet_0 onglet">Précédent</span>
      <div class="g-recaptcha"
          data-sitekey="6LdrycsUAAAAAFmkTvyLrHHwnAozXsqIpYkbr1Nv">
          </div>
      <input type="submit" name="valider" value="valider" class="onglet_0 onglet"/>
    </form>
  </div>

</center>
<script type="text/javascript">

      //<!--

              var anc_onglet = 'etape1';
              change_onglet(anc_onglet);

      //-->

    </script>
@include('view_fin')
