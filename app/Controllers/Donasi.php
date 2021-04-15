<?php

namespace App\Controllers;

use App\Models\DonasiModel;

class Donasi extends BaseController
{
    /**
     * @var HTTP\IncomingRequest
     */
    protected $request;

    public function __construct()
    {
        $this->donasiModel = new DonasiModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Halaman Donasi | Admin',
            'donasi' => $this->donasiModel->findAll(),
            'uri' => \Config\Services::request()->uri
        ];
        echo view('layouts/admin/head', $data);
        echo view('layouts/admin/sidebar', $data);
        echo view('admin/donasi/donasi', $data);
        echo view('layouts/admin/footer');
    }


    public function create()
    {
        session();
        $data = [
            'title' => 'Form Tambah Data Donasi',
            'validation' => \Config\Services::validation()
        ];
        // dd($data);

        echo view('layouts/admin/head', $data);
        echo view('layouts/admin/sidebar');
        echo view('admin/donasi/create', $data);
        echo view('layouts/admin/footer');
    }

    public function save()
    {
        // untuk mengambil method apapun (post/get) dan mengambil field judul
        // $this->request->getVar('judul');

        // untuk mengambil method apapun (post/get) dan mengambil semua field
        // $this->request->getVar();


        // validasi input
        if (!$this->validate([
            'nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama Donatur harus diisi.'
                ]
            ],
            'donasi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nominal Donasi harus diisi.'
                ]
            ],
            'pembayaran' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Pembayaran harus diisi.'
                ]
            ],
            'waktu_donasi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Waktu Donasi harus diisi.'
                ]
            ],
            'bukti_transfer' => [
                'rules' => 'uploaded[bukti_transfer]|is_image[bukti_transfer]|mime_in[bukti_transfer,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'uploaded' => 'Pilih gambar terlebih dahulu',
                    // 'max_size' => 'Ukuran gambar terlalu besar',
                    'is_image' => 'Yang anda pilih bukan gambar',
                    'mime_in' => 'Yang anda pilih bukan gambar'
                ]
            ]
        ])) {
            // $validation = \Config\Services::validation();
            // return redirect()->to('/komik/create')->withInput()->with('validation', $validation);
            return redirect()->to('/donasi/create')->withInput();
        }

        // // ===== set default upload file name =====
        $fileBukti = $this->request->getFile('bukti_transfer');
        if ($fileBukti->getError() == 4) {
            $namaBukti = 'default.jpg';
        } else {
            // pindahkan ke folder img
            $fileBukti->move('img');
            // ambil nama file bukti_transfer
            $namaBukti = $fileBukti->getName();
        }

        // $slug = url_title($this->request->getVar('judul'), '-', true);

        $this->donasiModel->save([
            'nama' => $this->request->getVar('nama'),
            // 'slug' => $slug,
            'donasi' => $this->request->getVar('donasi'),
            'pembayaran' => $this->request->getVar('pembayaran'),
            'waktu_donasi' => $this->request->getVar('waktu_donasi'),
            'bukti_transfer' => $namaBukti
        ]);

        session()->setFlashdata('info', 'Data berhasil ditambahkan.');

        return redirect()->to('/donasi');
    }

    public function delete($id)
    {
        //  ===== CARA 1 (menghapus value default) =====
        // // cari gambar berdasarkan id
        // $komik = $this->donasiModel->find($id);
        // // hapus gambar
        // unlink('img/' . $komik['cover']);


        //  ===== CARA 2 (tidak menghapus value default) =====
        // cari gambar berdasarkan id
        // $donasi = $this->donasiModel->find($id);
        // cek jika file gambarnya default.jpg
        // if ($donasi['bukti_transfer'] != 'default.jpg') {
        //     // hapus gambar
        //     unlink('img/' . $donasi['bukti_transfer']);
        // }

        $this->donasiModel->delete($id);
        session()->setFlashdata('info', 'Data berhasil dihapus.');
        return redirect()->to('/donasi');
    }

    public function edit($id)
    {
        session();
        $data = [
            'title' => 'Form Ubah Data Donatur',
            'validation' => \Config\Services::validation(),
            'donasi' => $this->donasiModel->getDonasi($id)
        ];

        echo view('layouts/admin/head', $data);
        echo view('layouts/admin/sidebar');
        echo view('admin/donasi/edit', $data);
        echo view('layouts/admin/footer');
    }


    public function update($id)
    {
        $fileBukti = $this->request->getFile('bukti_transfer');
        // cek gambar, apakah tetap gambar lama
        if ($fileBukti->getError() == 4) {
            $namaBukti = $this->request->getVar('buktiLama');
        } else {
            $namaBukti = $fileBukti->getName();
            // pindahkan gambar
            $fileBukti->move('img', $namaBukti);
            // hapus file lama
            // unlink('img/' . $this->request->getVar('buktiLama'));
        }

        // $slug = url_title($this->request->getVar('judul'), '-', true);

        $this->donasiModel->save([
            'id_donasi' => $id,
            'nama' => $this->request->getVar('nama'),
            // 'slug' => $slug,
            'donasi' => $this->request->getVar('donasi'),
            'pembayaran' => $this->request->getVar('pembayaran'),
            'waktu_donasi' => $this->request->getVar('waktu_donasi'),
            'bukti_transfer' => $namaBukti
        ]);

        session()->setFlashdata('info', 'Data berhasil diubah.');

        return redirect()->to('/donasi');
    }
}
