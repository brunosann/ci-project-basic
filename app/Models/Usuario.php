<?php

namespace App\Models;

use CodeIgniter\Model;

class Usuario extends Model
{
  protected $table = 'usuarios';
  protected $primaryKey = 'id_user';
  protected $returnType = 'object';
  protected $AllowedFields = ['nome', 'sobrenome', 'email', 'senha', 'img', 'data_created'];
}
