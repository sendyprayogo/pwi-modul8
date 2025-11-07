<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index(){
        $data_toko = [
            'nama_toko' => 'Tulis Nama Kamu',
            'alamat_toko' => 'Jl. Terus Jadian Kagak',
            'status_toko' => 'Belum Pasti'
        ];
        // return view('pages.product.show', $data_toko);

        //kita gunakan Eloquemt ORM
        $data_product = DB::table('products')->paginate(5); //menjalankan query untuk mendapatkan semua data pada database table produk
        
        return view('pages.product.show', [
            'data_toko'=> $data_toko,
            'data_produk'=>$data_product,
        ]);
    }

    public function addProduct(){
        return view('pages.addProduct');
    }
}
