<?php

namespace App\Controllers;

use App\Models\DonasiModel;

class Home extends BaseController
{
	public function __construct()
	{
		$this->donasiModel = new DonasiModel();
	}

	public function index()
	{
		$data = [
			'title' => 'Dontaion For NTT | Seatap & Tridaya',
			'donasi' => $this->donasiModel->findAll(),
			'total' => $this->donasiModel->total()->getResult()
		];

		return view('layouts/website/index', $data);
	}
}
