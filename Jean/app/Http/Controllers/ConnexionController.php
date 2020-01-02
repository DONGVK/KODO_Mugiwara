<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

class ConnexionController extends Controller {

  public function index()
  {
    return view('view_connexion');
  }

}

?>
