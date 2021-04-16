<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\BlogsModel;

class Blogs extends BaseController
{
	/**
	 * @var HTTP\IncomingRequest
	 */
	protected $request;
	// agar bisa digunakan disini dan kelas turunannya


	public function __construct()
	{
		$this->blogsModel = new BlogsModel();
	}


	public function index()
	{
		$data = [
			'title' => 'Halaman Blog | Admin',
			'uri' => \Config\Services::request()->uri,
			'blogs' => $this->blogsModel->findAll()
		];

		echo view('layouts/admin/head', $data);
		echo view('layouts/admin/sidebar', $data);
		echo view('admin/blogs/blogs', $data);
		echo view('layouts/admin/footer');
	}

	public function create()
	{
		session();
		$data = [
			'title' => 'Form Tambah Data Blog',
			'validation' => \Config\Services::validation(),
			'uri' => \Config\Services::request()->uri
		];

		echo view('layouts/admin/head', $data);
		echo view('layouts/admin/sidebar', $data);
		echo view('admin/blogs/create', $data);
		echo view('layouts/admin/footer');
	}

	public function save()
	{
		if (!$this->validate([
			'title' => [
				'rules' => 'required|is_unique[blogs.title]',
				'errors' => [
					'required' => 'Judul harus diisi',
					'is_unique' => 'Judul sudah dipakai. Silahkan ganti.'
				]
			],
			'desc' => [
				'rules' => 'required',
				'errors' => [
					'required' => 'Deskripsi harus diisi'
				]
			],
			'cover' => [
				'rules' => 'required|is_image[cover]|ext_in[cover,png,jpg,jpeg,gif]',
				'errors' => [
					'required' => 'Cover harus dipilih',
					'is_image' => 'File yang anda pilih bukan gambar',
					'ext_in' => 'Ekstensi file anda tidak diperbolehkan'
				]
			]
		])) {
			return redirect()->to('/blogs/create')->withInput();
		}

		$fileCover = $this->request->getFile('cover');
		if ($fileCover->getError() == 4) {
		} else {
			$fileCover->move('img');
			$namaCover = $fileCover->getName();
		}

		$this->blogsModel->save([
			'title' => $this->request->getVar('title'),
			'desc' => $this->request->getVar('desc'),
			// 'author' => $this->request->getVar('author'),
			'cover' => $namaCover
		]);

		return redirect()->to('/blogs');
	}
}
