@extends('layouts.main')

@section('title','Produk')


@section('container')

<div class="container">
    <div class="row">
        <div class="col-6">

            <a href="/create-products" class="btn btn-primary">Tambah</a>
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="row">No</th>
                        <th scope="row">Id Barang</th>
                        <th scope="row">Nama Barang</th>
                        <th scope="row">Tarif</th>
                        <th scope="row">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                   @foreach ($products as $pdc)
                   <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td>{{$pdc->id_produk}}</td>
                    <td>{{$pdc->nm_produk}}</td>
                    <td>{{$pdc->harga}}</td>
                    
                    <td>
                        <a href="/edit-products{{$pdc->id}}" class="btn btn-primary">Edit</a>
                        <form action="/products{{$pdc->id}}" method="POST" class="d-inline">
                            @method('delete')
                            @csrf
                            <button class="btn btn-dangger" >Hapus</button>
                        </form>
                    </td>
                </tr>
                   @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
    
@endsection