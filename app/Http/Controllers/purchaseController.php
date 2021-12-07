<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class purchaseController extends Controller
{

    public function display($id) {
      return 'Compra '.$id;
    }

    public function displayEmpty() {
      return 'ID vazio';
    }

    public function buyStatus($userId,$buyId) {
      return 'Usuário '.$userId.' realizou compra '.$buyId;
    }

    public function edit($id) {
      return 'Compra '.$id.' atualizada';
    }

    public function delete($id) {
      return 'Compra '.$id.' excluída';
    }

}
