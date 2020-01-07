<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
use Hash;

class Utilisateur extends Model
{
  private $pdo;

  /*private public __construct()
  {

      try {
          $this->$pdo = DB::connection()->getPdo();
          $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          $this->pdo->query("SET nameS 'utf8'");
      } catch (PDOException $e) {
          die('Echec connexion, erreur n°' . $e->getCode() . ':' . $e->getMessage());
      }
  }
*/

  /* Mettre les informations d'insciption dans la BDD */
  public function store($nom, $prenom, $date, $adresse, $mail, $mdp, $stat, $eta){
    //DB::table('Utilisateur')->insert($information);
    $id = uniqid();
    while(DB::select('select * from utilisateur where password = ?', [$id])){
      $id = uniqid();
    }
    $datecreation = date('d F Y', time());
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
      'abonnement' => 'null',
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
        echo ' Connexion réussie ...';
        $nom = DB::select('select nom from utilisateur where adressem = ?', [$mail]);
        $nom1 =json_decode(json_encode($nom[0]), True);
        $id= DB::select('select iduser from utilisateur where adressem = ?', [$mail]);
        $id1 =json_decode(json_encode($id[0]), True);
        echo '<p> Bonjour '.$nom1['nom']. ' votre idUser est : '.$id1['iduser'].'</p>';
      }else{
        echo ' Connexion échouée ...';
      }
    }
  }

}
