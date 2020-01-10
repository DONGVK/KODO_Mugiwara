<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Datetime;
use DB;
use Hash;

class Utilisateur extends Model
{
  private $pdo;

  public function __construct()
  {
    $verify = DB::select('select * from utilisateur where idUser = ?', ['@Admin']);
    if( $verify == null){
    DB::table('utilisateur')->insert([
      'iduser'=> '@Admin',
      'nom'=>'Admin',
      'prenom'=>'Admin',
      'birthdate'=>'0000-00-00',
      'adressep'=>'Admin',
      'adressem'=>'admin@admin.fr',
      'password'=>bcrypt('admin'),
      'statue'=> 5,
      'datecreation' => null,
      'etablissement' => null,
      'abonnement' => null,
      'idgroup' => null
    ]
    );
    }
  }

  /* Mettre les informations d'insciption dans la BDD */
  public function store($nom, $prenom, $date, $adresse, $mail, $mdp, $stat, $eta){
    /*$nom = $nom;
    $prenom = $prenom;
    $adresse = $adresse;
    $mail = $mail;
    $mdp = $mdp;
    $eta = $eta;
    $date = $date;*/
    $id = uniqid();
    while(DB::select('select * from utilisateur where iduser = ?', [$id]) != null ){
      $id = uniqid();
    }
    /*$datecreation = date('d F Y', time());*/
    $datecreation = new DateTime();
    DB::table('utilisateur')->insert([
      'iduser'=> $id,
      'nom'=>$nom,
      'prenom'=>$prenom,
      'birthdate'=>$date,
      'adressep'=>$adresse,
      'adressem'=>$mail,
      'password'=>bcrypt($mdp),
      'statue'=> $stat,
      'datecreation' => $datecreation,
      'etablissement' => $eta,
      'abonnement' => null,
      'idgroup' => null
    ]
    );
  }

  public function connexion($mail, $mdp){
    $verify = DB::select('select * from utilisateur where adressem = ?', [$mail]);
    if($verify != null){
      $password = DB::select('select password from utilisateur where adressem = ?', [$mail]);
      $password1 =json_decode(json_encode($password[0]), True);
      if( password_verify($mdp, $password1['password']) ){
        /*$nom = DB::select('select nom from utilisateur where adressem = ?', [$mail]);
        $nom1 =json_decode(json_encode($nom[0]), True);
        $id= DB::select('select iduser from utilisateur where adressem = ?', [$mail]);
        $id1 =json_decode(json_encode($id[0]), True);
        echo '<p> Bonjour '.$nom1['nom']. ' votre idUser est : '.$id1['iduser'].'</p>';*/
        return 1;
      }else{
        /*echo "<p> Vous n'êtes pas encore inscrit ? <a href='/inscriptionn'> Inscrivez-vous </a></p>";*/
        return -1;
      }
    }else{
      return 0;
    }
  }

  public function getId($mail){
    $verify = DB::select('select iduser from utilisateur where adressem = ?', [$mail]);
    if(isset($verify[0])){
      $confirm=json_decode(json_encode($verify[0]), True);
      return $confirm['iduser'];
    }
  }

  public function getPassword($mail){
    $password = DB::select('select password from utilisateur where adressem = ?', [$mail]);
    if(isset($password[0])){
      $password1 =json_decode(json_encode($password[0]), True);
      return $password1['password'];
    }
  }

  public function getNom($mail){
    $nom= DB::select('select nom from utilisateur where adressem = ?', [$mail]);
    if(isset($nom[0])){
      $nom1 =json_decode(json_encode($nom[0]), True);
      return $nom1['nom'];
    }
  }

}
