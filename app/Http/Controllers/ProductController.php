<?php

namespace App\Http\Controllers;

use App\Models\Product;

class ProductController extends Controller
{
    // Menampilkan halaman daftar produk
    public function index()
    {
        $data = [
            'sName'    => 'Tulis Nama Kamu',
            'sAddress' => 'Jl. Terus Jadian Kagak',
            'sStatus'  => 'Belum Pasti',
        ];

        return view('pages.product.show', $data + [
            'data_produk' => Product::orderBy('id_product')->get(),
        ]);
    }

    // Menampilkan halaman tambah produk
    public function addProduct()
    {
        return view('pages.product.addProduct');
    }
}
