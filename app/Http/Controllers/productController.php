<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class productController extends Controller
{
    public function display($id) {
      return 'Produto '.$id;
    }

    public function displayEmpty() {
      return 'ID vazio';
    }

    public function edit($id) {
      return 'Produto '.$id.' editado';
    }

    public function delete($id) {
      return 'Produto '.$id.' deletado';
    }

}
