<?php

namespace App\Controllers;

use App\Models\Post as ModelsPost;

class Post extends BaseController
{
  public function add()
  {
    $validation = $this->validate([
      'post' => 'required'
    ]);

    if (!$validation) return redirect()->to(site_url('/'));

    if (session()->get('usuario') && session()->get('id')) {
      $post = $this->request->getPost('post');
      $usuario = session()->get('usuario');
      $id = session()->get('id');

      $posts = new ModelsPost();
      $posts->insert([
        'post' => $post,
        'date_created' => date('Y/m/d H:i:s'),
        'usuario' => $usuario,
        'id_user' => $id
      ]);

      return redirect()->to(site_url('/'));
    }

    return redirect()->to(site_url('/login'));
  }
}
