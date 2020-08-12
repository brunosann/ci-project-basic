<?php

namespace App\Controllers;

use App\Models\Post;
use App\Models\Usuario;

class Editar extends BaseController
{
  public function index()
  {
    $data = [];
    if (session()->has('erro')) {
      $data['erro'] = session('erro');
    }

    $id = session()->get('id');
    $posts = new Post();
    $data['posts'] = $posts->where('id_user', $id)->findAll();

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

  public function edit()
  {
    $validation = $this->validate([
      'post' => 'required'
    ]);

    if (!$validation) return redirect()->to(site_url('/edit'));

    $post = $this->request->getPost('post');
    $id = $this->request->getPost('post-id');

    $posts = new Post();
    $posts->update($id, ['post' => $post]);
    return redirect()->to(site_url('/edit'));
  }

  public function delete($id)
  {
    $posts = new Post();
    $posts->delete($id);

    return redirect()->to(site_url('/edit'));
  }
}
