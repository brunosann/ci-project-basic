<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		if (session()->get('usuario') && session()->get('email')) return view('templates/conteudo');
		return redirect()->to(site_url('login'));
	}

	//--------------------------------------------------------------------

}
