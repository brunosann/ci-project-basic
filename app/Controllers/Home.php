<?php

namespace App\Controllers;

use App\Models\Post;
use App\Models\Usuario;

class Home extends BaseController
{
	public function index()
	{
		helper('img');

		$posts = new Post();
		$data['posts'] = $posts->findAll();
		$data['img'] = getImg();

		if (session()->get('usuario') && session()->get('email')) return view('templates/conteudo', $data);
		return redirect()->to(site_url('login'));
	}

	//--------------------------------------------------------------------

}
