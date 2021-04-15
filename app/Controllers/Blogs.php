<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Blogs extends BaseController
{
	/**
	 * @var HTTP\IncomingRequest
	 */
	protected $request;

	public function index()
	{
		$data = [
			'title' => 'Halaman Blog | Admin',
			'uri' => \Config\Services::request()->uri
		];

		echo view('layouts/admin/head', $data);
		echo view('layouts/admin/sidebar', $data);
		echo view('admin/blogs/blogs', $data);
		echo view('layouts/admin/footer');
	}
}
