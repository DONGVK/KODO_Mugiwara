<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Utilisateur;
use DB;

class InscriptionController extends Controller {

  public function inscriptiona()
  {
    return view('view_inscriptionauditeur');
  }

  public function inscriptions()
  {
    return view('view_inscriptionspeaker');
  }

  public function inscriptiono()
  {
    return view('view_inscriptionorganisateur');
  }

  public function istore(Request $request)
  {
    $eta=null;
    $abo=null;
    if(isset($request->etablissement)){
      $eta=$request->etablissement;
    }
    $utilisateur = new Utilisateur;
    $nom = $request->civilite.'.'.htmlspecialchars($request->nom);
    $utilisateur->store(
      $nom,
      htmlspecialchars($request->prenom),
      htmlspecialchars($request->date),
      htmlspecialchars($request->adresse),
      htmlspecialchars($request->mail),
      htmlspecialchars($request->mdp),
      htmlspecialchars($request->statue),
      htmlspecialchars($eta)
    );
    return view('view_connexion');
  }

}

?>
