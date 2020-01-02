<?php
class Model {
   private $bd;
   private static $instance; 

   private function __construct (){ 	//private car instancié une fois
   	try{
   		//$hote, $user, $mdp définie dans un autre fichier (protection) 
   		$this->bd = new PDO ($hote, $user, $mdp);
   		$this->bd-> query('SET_NAMES_UTF8');
   		$this->bd-> setAttribute(PDO::ATTR_ERRMODE, PDO::ATTR_ERRMODE_EXCEPTION);
		}catch(PDOException $e){
			die('<p>La connexion a échoué'.$e->getCode().','.$e->getMessage().'<p>');
		}
   }


   /*méthode permettant d'instancier un Model si il n'a pas été créer auparavant*/
   public static function getModel(){
   	if(is_null(self::$instance)))
		self::$instance= new Model();
	return self::$instance;
   }


   /* Pour la suite il faut créer les mèthodes qui correspondents au 
   	fonctionnalité du site (dans le tableau des fonctionnalités)
   */
}

?>