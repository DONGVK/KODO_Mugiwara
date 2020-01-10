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

          function validation(f) {
            if (f.mdp1.value != f.mdp.value) {
              alert('Ce ne sont pas les mêmes mots de passe !');
              f.mdp.focus();
              change_onglet('etape2');
              return false;
            }
            else if (f.mail.value != f.mail1.value) {
              alert('Les adresses mails ne sont pas identiques ! ( passer la souris sur la barre pour plus de détail )');
              f.mail.focus();
              change_onglet('etape2');
              return false;
            }
            else if (f.mdp1.value == f.mdp.value) {
              return true;
            }
            else {
              f.mdp1.focus();
              return false;
            }
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
    <script src="https://www.google.com/recaptcha/api.js"></script>

<center>
  <div>
    <span id="onglet_etape1" class="etape">Etape 1</span>
    <span id="onglet_etape2" class="etape">Etape 2</span>
    <span id="onglet_etape3" class="etape">Etape 3</span>
  </div>

<form method="POST" action="\inscription" onSubmit="return validation(this)">
  @csrf
  {{ csrf_field() }}
  <div id="contenu_onglet_etape1" class="contenu_onglet">
      <input type="radio" name="statue" value="1" checked style="display:none"> Auditeur
      <br/>
      <input type="radio" name="civilite" value="Mr" required> Monsieur
      <input type="radio" name="civilite" value="Mme"> Madame
      <p>Nom : </p>
      <input type="text" name="nom" required>
      <p>Prénom : </p>
      <input type="text" name="prenom" required>
      <p>Date naissance</p>
      <input type="date" name="date" required>
      <div>
      <p>Adresse :</p>
      <input id="searchTextField" name=adresse type="text" size="50" required>
    </div>
    </br>
    <span onclick="javascript:change_onglet('etape2');" id="onglet_etape2" class="onglet_0 onglet">Continuer</span>
  </div>

  <div id="contenu_onglet_etape2" class="contenu_onglet">
      <p>Adresse mail </p>
      <input type="mail" name="mail" required>
      <p>Confirmer l'adresse mail </p>
      <input type="mail" name="mail1" required>
      <p>Mot de passe : </p>
      <input type="password" name="mdp" required>
      <p>Confirmer le mot de passe : </p>
      <input type="password" name="mdp1" required>
  </br>
  </br>
  <span onclick="javascript:change_onglet('etape1');" id="onglet_etape2" class="onglet_0 onglet">Précédent</span>
  <span onclick="javascript:change_onglet('etape3');" id="onglet_etape2" class="onglet_0 onglet">Continuer</span>
  </div>

  <div id="contenu_onglet_etape3" class="contenu_onglet">
      <select name="theme" size="1">
        <option>Science
        <option>Litterature
        <option>Mathématique
        <option>Sport
      </select>
      </br>
      </br>
      <span onclick="javascript:change_onglet('etape2');" id="onglet_etape2" class="onglet_0 onglet">Précédent</span>
      </br>
      <div class="g-recaptcha"
          data-sitekey="6LdrycsUAAAAAFmkTvyLrHHwnAozXsqIpYkbr1Nv">
          </div>
      <input type="submit" name="valider" value="valider" class="onglet_0 onglet"/>
  </div>
</form>

</center>
<script type="text/javascript">

      //<!--

              var anc_onglet = 'etape1';
              change_onglet(anc_onglet);

      //-->

    </script>
@include('view_fin')
