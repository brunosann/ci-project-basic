<?php

namespace App\Controllers;

use App\Models\Post;
use App\Models\Usuario;

class UserUpdate extends BaseController
{
  public function update()
  {
    $validation = $this->validate(
      [
        'nome' => 'required|alpha_space',
        'sobrenome' => 'required|alpha_space',
        'senha' => 'required|min_length[8]'
      ],
      [
        'nome' => [
          'required' => 'Nome obrigatório',
          'alpha_space' => 'Sómente caracteres alfabéticos'
        ],
        'sobrenome' => [
          'required' => 'Sobrenome obrigatório',
          'alpha_space' => 'Sómente caracteres alfabéticos'
        ],
        'senha' => [
          'required' => 'Senha obrigatória',
          'min_length' => 'No minimo 8 caracteres'
        ]
      ]
    );

    if (!$validation) return redirect()->back()->with('erro', $this->validator);

    $id = session()->get('id');
    $nome = $this->request->getPost('nome');
    $sobrenome = $this->request->getPost('sobrenome');
    $senha = $this->request->getPost('senha');
    $senhaHash = password_hash($senha, PASSWORD_BCRYPT);

    $usuarios = new Usuario();
    $usuarios->update($id, [
      'nome' => $nome,
      'sobrenome' => $sobrenome,
      'senha' => $senhaHash
    ]);

    $db = db_connect();
    $db->query('UPDATE posts SET usuario = :nome: WHERE id_user = :id:', ['nome' => $nome, 'id' => $id]);
    $db->close();

    session()->set([
      'usuario' => $nome,
      'sobrenome' => $sobrenome
    ]);

    return redirect()->to(site_url('/edit'));
  }
}
