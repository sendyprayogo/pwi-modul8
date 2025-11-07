@extends('layouts.master')

@section('content')
<style type="text/css">
    .pagination li {
        float: left;
        list-style-type: none;
        margin: 5px;
    }
</style>
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
        <table class="table">
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
                <div class="container">
                    @foreach ($data_produk as $item)
                    <div>
                        <tr>
                            <th scope="row">{{$loop->iteration}}</th>
                            <td>{{$item->name_product}}</td>
                            <td>{{$item->stock_product}}</td>
                            <td>{{$item->price_product}}</td>
                            <td>{{$item->desc_product}}</td>
                            <td>
                                <button style="button" class="btn btn-danger">Delete</button>
                                <button style="button" class="btn btn-warning">Edit</button>
                            </td>
                        </tr>

                    </div>
                    @endforeach
                </div>
            </tbody>
        </table>

    </div>
    {{ $data_produk -> links('pagination::bootstrap-5')}}
    Halaman : {{ $data_produk->currentPage() }} <br />
    Jumlah Data : {{ $data_produk->total() }} <br />
    Data Per Halaman : {{ $data_produk->perPage() }} <br />

</div>
@endsection