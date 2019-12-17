<?php

class Controller_inscription extends Controller {

  public function action_inscription(){
    //$m=Model::getModel();
    $tab = ['fonction'=>"fonction requête sql"];
    $this->render('inscription',$tab);
  }
  public function action_default(){
    $this->action_inscription();
  }
}

?>
