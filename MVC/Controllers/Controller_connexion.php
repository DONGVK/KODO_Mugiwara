<?php

class Controller_connexion extends Controller {

  public function action_connexion(){
    //$m=Model::getModel();
    $tab = ['fonction'=>"fonction requête sql"];
    $this->render('connexion',$tab);
  }
  public function action_default(){
    $this->action_connexion();
  }
}

?>
