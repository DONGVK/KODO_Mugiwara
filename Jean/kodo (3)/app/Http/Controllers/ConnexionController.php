<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Utilisateur;

session_start();
class ConnexionController extends Controller {
  public function index()
  {
    return view('view_connexion1');
  }

  public function connexion(Request $request)
  {
    //include '../resources/credential.php';
    $utilisateur = new Utilisateur;
    if($utilisateur->connexion( htmlspecialchars($request->mail), htmlspecialchars($request->mdp) ) == 1){
      $_SESSION['id'] = $utilisateur->getId(htmlspecialchars($request->mail));
      $_SESSION['password'] = $utilisateur->getPassword(htmlspecialchars($request->mail));
      $_SESSION['nom'] = $utilisateur->getNom(htmlspecialchars($request->mail));
      //storage($utilisateur->getId($request->mail), $utilisateur->getPassword($request->mail), $utilisateur->getNom($request->mail));
      return view('view_profil');
    }else if ($utilisateur->connexion( htmlspecialchars($request->mail), htmlspecialchars($request->mdp) ) == -1){
      $tab = view('view_connexion1',['msg'=>'Votre mot de passe est incorrect'])->render();
      echo $tab;
    }else{
      $tab = view('view_connexion1',['msg'=>"Vous n'êtes pas inscrit, inscrivez-vous"])->render();
      echo $tab;
    }
  }

  public function accueil() {
    if(isset($_SESSION['id'])){
      return view('view_home1');
    }else{
      return view('view_home');
    }
  }

  public function profil() {
    return view('view_profil');
  }

}

?>
