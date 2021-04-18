<?php

namespace App\Controllers;

use App\Models\BlogsModel;
use CodeIgniter\I18n\Time;

class Blog extends BaseController
{
    public function __construct()
    {
        $this->blogsModel = new BlogsModel();
    }

    public function index()
    {
        helper('text');
        $data = [
            'title' => 'Halaman Blog | Seatap & Tridaya',
            'blogs' => $this->blogsModel->findAll(),
            'uri' => \Config\Services::request()->uri
        ];

        echo view('layouts/website/head', $data);
        echo view('layouts/website/header');
        echo view('layouts/blog', $data);
        echo view('layouts/website/javascript');
    }

    public function detail($slug)
    {
        $data = [
            'title' => 'Halaman Detail Blog | Seatap & Tridaya',
            'blogs' => $this->blogsModel->getBlog($slug),
            'uri' => \Config\Services::request()->uri
        ];

        echo view('layouts/website/head', $data);
        echo view('layouts/website/header');
        echo view('layouts/blogdetail', $data);
        echo view('layouts/website/javascript');
    }
}
