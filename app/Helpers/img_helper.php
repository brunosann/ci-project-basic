<?php

use App\Models\Usuario;

function getImg()
{
  $usuarios = new Usuario();
  $id = session()->get('id');
  $user = $usuarios->find($id);
  return $user->img;
}
