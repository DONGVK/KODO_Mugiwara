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
    if($utilisateur->connexion( $request->mail, $request->mdp ) == 1){
      $_SESSION['id'] = $utilisateur->getId($request->mail);
      $_SESSION['password'] = $utilisateur->getPassword($request->mail);
      $_SESSION['nom'] = $utilisateur->getNom($request->mail);
      return view('view_profil');
    }else if ($utilisateur->connexion( $request->mail, $request->mdp ) == -1){
      $tab = view('view_connexion1',['msg'=>'Votre mot de passe est incorrect'])->render();
      echo $tab;
      //return view('view_connexion1', ['url' => 'James']);
    }else{
      return "Vous n'êtes pas encore inscrit";
    }
  }

}

?>
