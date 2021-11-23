@extends('layouts.main')

@section('title','Data karyawan')

@section('container')
<div class="container">
    <div class="row">
      <div class="col-12">

        <h1>karyawan</h1>


        <a href="/create-karyawan" class="btn btn-primary">Tambah Data</a>

        <table class="table">
          <thead class="thead-dark">
            <tr>
              <th scope="col">#</th>
              <th scope="col">Id</th>
              <th scope="col">Nama</th>
              <th scope="col">Alamat</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($karyawans as $kry)
                
            <tr>
              <th scope="row">{{$loop->iteration}}</th>
              <td>{{ $kry->id_kr }}</td>
              <td>{{ $kry->nama_kr}}</td>
              <td>{{ $kry->alamat_kr}}</td>
              <td>
                <a href="/{{$kry->id}}" class="btn btn-primary"">Edit</a>
                <form action="{{$kry->id}}" method="POST" class="d-inline">
                  @method('delete')
                  @csrf
                  <button class="btn btn-danger" >Hapus</button>
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