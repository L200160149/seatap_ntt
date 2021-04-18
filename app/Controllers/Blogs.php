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
			'author' => [
				'rules' => 'required',
				'errors' => [
					'required' => 'Penulis harus diisi'
				]
			],
			'cover' => [
				'rules' => 'uploaded[cover]|is_image[cover]|ext_in[cover,png,jpg,jpeg,gif]',
				'errors' => [
					'uploaded' => 'Pilih Cover terlebih dahulu',
					'is_image' => 'File yang anda pilih bukan gambar',
					'ext_in' => 'Ekstensi file anda tidak diperbolehkan'
				]
			]
		])) {
			return redirect()->to('/blogs/create')->withInput();
		}

		$fileCover = $this->request->getFile('cover');
		if ($fileCover->getError() == 4) {
			$namaCover = 'default.jpg';
		} else {
			$fileCover->move('img');
			$namaCover = $fileCover->getName();
		}

		$slug = url_title($this->request->getVar('title'), '-', true);

		$this->blogsModel->save([
			'title' => $this->request->getVar('title'),
			'slug' => $slug,
			'desc' => $this->request->getVar('desc'),
			'author' => $this->request->getVar('author'),
			'cover' => $namaCover
		]);

		session()->setFlashdata('info', 'Data berhasil ditambah.');

		return redirect()->to('/blogs');
	}

	public function edit($slug)
	{
		$data = [
			'title' => 'Halaman Edit Blog',
			'validation' =>  \Config\Services::validation(),
			'blog' => $this->blogsModel->getBlog($slug),
			'uri' => \Config\Services::request()->uri
		];

		echo view('layouts/admin/head', $data);
		echo view('layouts/admin/sidebar', $data);
		echo view('admin/blogs/edit', $data);
		echo view('layouts/admin/footer');
	}

	public function update($id)
	{
		// cek judul
		$blogLama = $this->blogsModel->getBlog($this->request->getVar('slug'));
		if ($blogLama['title'] == $this->request->getVar('title')) {
			$ruleJudul = 'required';
		} else {
			$ruleJudul = 'required|is_unique[blogs.title]';
		}

		if (!$this->validate([
			'title' => [
				'rules' => $ruleJudul,
				'errors' => [
					'required' => 'Judul harus diisi.',
					'is_unique' => 'Judul sudah dipakai. Silahkan ganti'
				]
			],
			'desc' => [
				'rules' => 'required',
				'errors' => [
					'required' => 'Deskripsi harus diisi'
				]
			],
			'author' => [
				'rules' => 'required',
				'errors' => [
					'required' => 'Penulis harus diisi'
				]
			],
			'cover' => [
				'rules' => 'is_image[cover]|ext_in[cover,png,jpg,jpeg,gif]',
				'errors' => [
					// 'uploaded' => 'Pilih Cover terlebih dahulu',
					'is_image' => 'File yang anda pilih bukan gambar',
					'ext_in' => 'Ekstensi file anda tidak diperbolehkan'
				]
			]
		])) {
			return redirect()->to('/blogs/edit/' . $this->request->getVar('slug'))->withInput();
		}

		$fileCover = $this->request->getFile('cover');
		// cek gambar, apakah tetap gambar lama
		if ($fileCover->getError() == 4) {
			$namaCover = $this->request->getVar('coverLama');
		} else {
			$namaCover = $fileCover->getName();
			// pindahkan gambar
			$fileCover->move('img', $namaCover);
			// hapus file lama
			unlink('img/' . $this->request->getVar('coverLama'));
		}

		$slug = url_title($this->request->getVar('title'), '-', true);

		$this->blogsModel->save([
			'id' => $id,
			'title' => $this->request->getVar('title'),
			'slug' => $slug,
			'desc' => $this->request->getVar('desc'),
			'author' => $this->request->getVar('author'),
			'cover' => $namaCover
		]);

		session()->setFlashdata('info', 'Data berhasil diubah.');

		return redirect()->to('/blogs');
	}

	public function delete($id)
	{
		$blogs = $this->blogsModel->find($id);
		// cek jika file gambarnya default.jpg
		if ($blogs['cover'] != 'default.jpg') {
			// hapus gambar
			unlink('img/' . $blogs['cover']);
		}

		$this->blogsModel->delete($id);
		session()->setFlashdata('info', 'Data berhasil dihapus.');
		return redirect()->to('/blogs');
	}

	public function detail($slug)
	{
		$data = [
			'title' => 'Halaman detail blog',
			'blog' => $this->blogsModel->getBlog($slug),
			'uri' => \Config\Services::request()->uri
		];

		echo view('layouts/admin/head', $data);
		echo view('layouts/admin/sidebar', $data);
		echo view('admin/blogs/detail', $data);
		echo view('layouts/admin/footer');
	}
}
