@extends('layouts.main')

@section('title','Edit')
    
@section('container')

    <div class="container">
        <div class="row">
            <h1>Form Edit</h1>
            <div class="col-md-6">
                <form action="/products{{$products->id}}" method="POST">
                @method('patch')
                @csrf
                <div class="form-group">
                    <label for="id_produk">Id</label>
                    <input type="text" class="form-control" value="{{ $products->id_produk}}" name="id_produk" id="id_produk" >
                </div>
                <div class="form-group">
                    <label for="nm_produk">Nama </label>
                    <input type="text" class="form-control" value="{{ $products->nm_produk}}" name="nm_produk" id="nm_produk" >
                </div>
                <div class="form-group">
                    <label for="harga">Harga</label>
                    <input type="text" class="form-control" value="{{ $products->harga}}" name="harga" id="harga" >
                </div>
                <button type="submit" class="btn btn-submit">Simpan</button>
                </form>
            </div>
        </div>
    </div>
    
@endsection

