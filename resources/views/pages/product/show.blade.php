@extends('layouts.master')

@section('content')
<h1>Daftar produk kami</h1>
<hr>
<a href="/product/addProduct" type="button" class="btn btn-primary mb-3">Tambah Data</a>
<div class="card">
    <card class="card-header">
        Produk Kami
    </card>
    <div class="alert alert-primary">
        <b>Nama Tokok : </b> {{$data_toko['nama_toko']}}
        <br>
        <b>Alamat Toko : </b> {{$data_toko['alamat_toko']}}
        <br>
        <b>Status Toko : </b> {{$data_toko['status_toko']}}
    </div>
    <div class="card-body">
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Produk</th>
                    <th scope="col">Stok</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Deskripsi</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data_produk as $item)
                <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td>{{$item->name_product}}</td>
                    <td>19</td>
                    <td>Rp. 96.000</td>
                    <td>Teh Inggris yang dikemas dalam 100gram.</td>
                    <td>
                        <button style="button" class="btn btn-danger">Delete</button>
                        <button style="button" class="btn btn-warning">Edit</button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection