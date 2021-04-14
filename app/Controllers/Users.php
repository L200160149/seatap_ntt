<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class Users extends BaseController
{

	public function __construct()
	{

		$this->userModel = new UserModel();
	}

	public function index()
	{

		$data = [
			'title' => 'Halaman Pengguna | Admin',
			'user' => $this->userModel->findAll()
		];


		echo view('layouts/admin/head', $data);
		echo view('layouts/admin/sidebar');
		echo view('admin/user/user', $data);
		echo view('layouts/admin/footer');
	}

	public function create()
	{
		session();
		$data = [
			'title' => 'Form Tambah Data Pengguna',
			'validation' => \Config\Services::validation()
		];
		// dd($data);

		echo view('layouts/admin/head', $data);
		echo view('layouts/admin/sidebar');
		echo view('admin/user/create', $data);
		echo view('layouts/admin/footer');
	}

	public function save()
	{
		// $slug = url_title($this->request->getVar('judul'), '-', true);

		$this->userModel->save([
			'username'     => $this->request->getVar('username'),
			'email'     => $this->request->getVar('email'),
			'password_hash' => password_hash($this->request->getVar('password_hash'), PASSWORD_DEFAULT)
		]);

		session()->setFlashdata('info', 'Data berhasil ditambahkan.');

		return redirect()->to('/users');
	}

	public function delete($id)
	{
		$this->userModel->delete($id);
		session()->setFlashdata('info', 'Data berhasil dihapus.');
		return redirect()->to('/users');
	}
}
