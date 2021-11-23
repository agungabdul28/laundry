@extends('layouts.main')

@section('title','Data Customer')

@section('container')
<div class="container">
  <div class="row">
    <div class="col-12">
      <h1>Data Costumer</h1>
      <a href="/create-costumers" class="btn btn-primary">Tambah Data</a>
      <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">No</th>
            <th scope="col">Costumer Id</th>
            <th scope="col">Nama</th>
            <th scope="col">No Telepone</th>
            <th scope="col">Alamat</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>

        <tbody>
          @foreach ($costumers as $cs)
              
          <tr>
          
          <th scope="row">{{$loop->iteration}}</th>
            <td>{{$cs->id_cost}} </td>
            <td>{{$cs->nama}}</td>
            <td>{{$cs->no_tlp }}</td>
            <td>{{$cs->alamat}} </td>
            <td>
              <a href="/costumers{{$cs->id}}" class="btn btn-primary">Edit</a>
              <form action="/costumers{{$cs->id}}" method="post" class="d-inline">
                @method('delete')
                @csrf
                <button class="btn btn-danger">Hapus</button>
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