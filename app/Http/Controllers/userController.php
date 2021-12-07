<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userController extends Controller
{

  public function display($id) {
    return 'Usuário '.$id;
  }

  public function displayEmpty() {
    return 'ID vazio';
  }

  public function edit($id) {
    return 'Usuário '.$id.' editado';
  }

  public function delete($id) {
    return 'Usuário '.$id.' excluído';
  }

}
