@extends('layouts.main')

@section('title','Product')
    
@section('container')
    <div class="container">
        <div class="row">
            <div class="col-md-6">

                <form action="/products" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="id_produk" class="form-label">Id</label>
                        <input type="text" class="form-control" name="id_produk" value="" id="id_produk">
                    </div>
                    <div class="form-group">
                        <label for="nm_produk" class="form-label">Nama Barang</label>
                        <input type="text" class="form-control" name="nm_produk" value="" id="nm_produk">
                    </div>
                    <div class="form-group">
                        <label for="harga" class="form-label">Harga</label>
                        <input type="text" class="form-control" name="harga" value="" id="harga">
                    </div>
                    <button class="btn btn-primary mt-3">Submit</button>
                </form>
            </div>
        </div>
    </div>
    
@endsection