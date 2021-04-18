<?php

namespace App\Controllers;

use App\Models\DonasiModel;
use App\Models\BlogsModel;

class Home extends BaseController
{
	public function __construct()
	{
		$this->donasiModel = new DonasiModel();
		$this->blogsModel = new BlogsModel();
	}

	public function index()
	{
		$data = [
			'title' => 'Dontaion For NTT | Seatap & Tridaya',
			'donasi' => $this->donasiModel->findAll(),
			'total' => $this->donasiModel->total()->getResult(),
			'blogs' => $this->blogsModel->findAll(),
			'uri' => \Config\Services::request()->uri
		];

		echo view('layouts/website/head', $data);
		echo view('layouts/website/header');
		echo view('layouts/home', $data);
		echo view('layouts/website/javascript');
	}
}
