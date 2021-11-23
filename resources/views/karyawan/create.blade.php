@extends('layouts.main')

@section('title','karyawan')

@section('container')
<div class="container">
    <div class="row">
      <div class="col-6">

        <h1>Tambah data karyawan</h1>

        <form action="/" method="POST" >
          @csrf
          <div class="form-grup mb-3">
            <label for="id_kr" class="form-label">Id karyawan</label>
            <input type="text" class="form-control" id="id_kr" name="id_kr">
          </div>
          <div class="form-grup mb-3">
            <label for="nama_kr" class="form-label">Nama karyawan</label>
            <input type="text" class="form-control" id="nama_kr" name="nama_kr" value="{{ old('nama_kr')}}">
          </div>
          <div class="form-grup mb-3">
            <label for="alamat_kr" class="form-label">Alamat karyawan</label>
            <input type="text" class="form-control" id="alamat_kr" name="alamat_kr" value="{{old('alamat_kr')}}">
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>

        
      </div>
    </div>

</div>
    
@endsection