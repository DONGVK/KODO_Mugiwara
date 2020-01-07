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
    $utilisateur = new Utilisateur;
    $nom = $request->civilite.'.'.$request->nom;
    $utilisateur->store(
      $nom,
      $request->prenom,
      $request->date,
      $request->adresse,
      $request->mail,
      $request->mdp,
      $request->statue
    );
    return view('view_connexion');
  }

}

?>
