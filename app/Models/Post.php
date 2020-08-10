<?php

namespace App\Models;

use CodeIgniter\Model;

class Post extends Model
{
  protected $table = 'posts';
  protected $primaryKey = 'id_post';
  protected $returnType = 'object';
  protected $allowedFields = ['post', 'date_created', 'date_updated', 'usuario', 'id_user'];
}
