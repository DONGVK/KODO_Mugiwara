<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

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
  public function store($nom, $prenom, $date, $adresse, $mail, $mdp, $stat){
    //DB::table('Utilisateur')->insert($information);
    $id = uniqid();
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
      'datecreation' => $datecreation
    ]
    );
  }

}
