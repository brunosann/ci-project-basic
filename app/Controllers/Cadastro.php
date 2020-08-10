<?php

namespace App\Controllers;

use App\Models\Usuario;

class Cadastro extends BaseController
{
  public function index()
  {
    $data = [];
    if (session()->has('erro')) {
      $data['erro'] = session('erro');
    }

    return view('cadastro', $data);
  }

  public function submit()
  {
    $validation = $this->validate(
      [
        'nome' => 'required|alpha',
        'sobrenome' => 'required|alpha',
        'email' => 'required|valid_email',
        'senha' => 'required|min_length[8]',
      ],
      [
        'nome' => [
          'required' => 'Preencha o campo NOME',
          'alpha' => 'Sómente caracteres alfabéticos '
        ],
        'sobrenome' => [
          'required' => 'Preencha o campo SOBRENOME',
          'alpha' => 'Sómente caracteres alfabéticos'
        ],
        'email' => [
          'required' => 'Preencha o campo EMAIL',
          'valid_email' => 'Insira um email valido'
        ],
        'senha' => [
          'required' => 'Preencha o campo SENHA',
          'min_length' => 'No minimo 8 caracteres'
        ],
      ]
    );

    if (!$validation) {
      return redirect()->back()->withInput()->with('erro', $this->validator);
    }

    $usuarios = new Usuario();

    $senha = $this->request->getPost('senha');
    $senhaHash = password_hash($senha, PASSWORD_BCRYPT);

    $data = [
      'nome' => $this->request->getPost('nome'),
      'sobrenome' => $this->request->getPost('sobrenome'),
      'email' => $this->request->getPost('email'),
      'senha' => $senhaHash,
      'date_created' => date('Y/m/d H:i:s'),
    ];

    $usuarios->insert($data);

    return redirect()->route('/');
  }
}
