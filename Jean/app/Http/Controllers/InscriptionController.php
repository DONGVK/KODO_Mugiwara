<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

class InscriptionController extends Controller {

  public function inscriptiona()
      {
          return view('view_inscriptionauditeur');
      }

  public function inscriptions()
    {
        return view('view_inscriptionspeaker');
    }

  public function inscriptiono()
        {
            return view('view_inscriptionorganisateur');
        }
}

?>
