<?php

namespace App\Controllers;

use App\Models\BarangModel;

class Barang extends BaseController
{
    protected $barangModel;

    public function __construct()
    {
        $this->barangModel = new BarangModel();
    }
    public function index()
    {
        $barang = $this->barangModel->findAll();


        $data = [
            'title' => 'Daftar Device',
            'barang' => $barang
        ];

        return view('barang/index', $data);
    }

    public function detail($id)
    {
        $barang = $this->barangModel->where(['id' => $id])->first();

        $data = [
            'title' => 'Detail Barang',
            'barang' => $barang
        ];

        return view('barang/detail', $data);
    }
}
