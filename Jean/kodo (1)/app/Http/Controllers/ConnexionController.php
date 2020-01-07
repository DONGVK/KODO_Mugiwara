<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Utilisateur;

class ConnexionController extends Controller {

  public function index()
  {
    return view('view_connexion1');
  }

  public function connexion(Request $request)
  {
    $utilisateur = new Utilisateur;
    $utilisateur->connexion( $request->mail, $request->mdp );
  }

}

?>
