<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'beranda'
		];
		return view('beranda', $data);
	}

	//--------------------------------------------------------------------

}
