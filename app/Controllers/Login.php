<?php

namespace App\Controllers;

use App\Models\Usuario;

class Login extends BaseController
{
  public function index()
  {
    return view('login');
  }

  public function submit()
  {
    $validation = $this->validate([
      'email' => 'required|valid_email',
      'senha' => 'required'
    ],);

    if (!$validation) return redirect()->to(site_url('/login'));

    $email = $this->request->getPost('email');
    $senha = $this->request->getPost('senha');

    $usuarios = new Usuario();
    $user = $usuarios->where('email', $email)->first();

    if (!$user) return view('login', ['erro' => 'Usuario não autorizado']);

    $verif = password_verify($senha, $user->senha);
    if (!$verif) return view('login', ['erro' => 'Usuario não autorizado']);

    session()->set([
      'id' => $user->id_user,
      'usuario' => $user->nome,
      'sobrenome' => $user->sobrenome
    ]);

    return redirect()->route('/');
  }
}
