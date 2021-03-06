<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Dashboard extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Halaman Dashboard',
			'uri' => \Config\Services::request()->uri
		];

		echo view('layouts/admin/head', $data);
		echo view('layouts/admin/sidebar', $data);
		echo view('admin/dashboard', $data);
		echo view('layouts/admin/footer');
	}
}
