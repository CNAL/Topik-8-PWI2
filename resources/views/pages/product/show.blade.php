@extends('layouts.master')

@section('content')
<h1>Daftar produk kami</h1>
<hr>
<a href="/product/addProduct" class="btn btn-primary mb-3">Tambah Data</a>
<div class="card">
    <div class="card-header">Produk Kami</div>
    <div class="alert alert-primary">
        <b>Nama Toko : </b> {{ $sName }} <br>
        <b>Alamat Toko : </b> {{ $sAddress }} <br>
        <b>Status Toko : </b> {{ $sStatus }}
    </div>
    <div class="card-body">
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>No</th><th>Nama Produk</th><th>Stok</th>
                    <th>Harga</th><th>Deskripsi</th><th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data_produk as $item)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $item->name_product }}</td>
                    <td>{{ $item->stock_product }}</td>
                    <td>Rp. {{ number_format($item->price_product, 0, ',', '.') }}</td>
                    <td>{{ $item->desc_product }}</td>
                    <td>
                        <button type="button" class="btn btn-danger btn-sm">Delete</button>
                        <button type="button" class="btn btn-warning btn-sm">Edit</button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
