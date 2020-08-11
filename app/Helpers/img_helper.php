<?php

use App\Models\Usuario;

function getImg()
{
  $usuarios = new Usuario();
  $id = session()->get('id');
  if (!$id) return null;
  $user = $usuarios->find($id);
  return $user->img;
}
