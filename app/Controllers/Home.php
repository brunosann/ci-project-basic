<?php

namespace App\Controllers;

use App\Models\Post;

class Home extends BaseController
{
	public function index()
	{
		$posts = new Post();
		$data['posts'] = $posts->findAll();

		if (session()->get('usuario') && session()->get('email')) return view('templates/conteudo', $data);
		return redirect()->to(site_url('login'));
	}

	//--------------------------------------------------------------------

}
