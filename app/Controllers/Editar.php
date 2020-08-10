<?php

namespace App\Controllers;

use App\Models\Usuario;

class Editar extends BaseController
{
  public function index()
  {
    helper('img');
    $data['img'] = getImg();
    return view('templates/editar', $data);
  }

  public function image()
  {

    $id = session()->get('id');
    if (!$id) return redirect()->to(site_url('/login'));

    $usuarios = new Usuario();

    $allowed = ['image/jpeg', 'image/png', 'image/jpg'];

    if (in_array($_FILES['img']['type'], $allowed)) {
      $ext = explode('/', $_FILES['img']['type'])[1];
      $nomeImg = md5(time() . rand(1, 1000)) . "." . $ext;
      move_uploaded_file($_FILES['img']['tmp_name'], './uploads/' . $nomeImg);
      $usuarios->update($id, ['img' => $nomeImg]);
    }
    return redirect()->to(site_url('/edit'));
  }
}
