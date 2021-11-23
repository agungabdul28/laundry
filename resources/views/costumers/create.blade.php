@extends('layouts.main')

@section('title','Costrumers')

@section('container')
<div class="container">
    <div class="row">
      <div class="col-6">

        <h1>Tambah data Costumer</h1>

        <form action="/costumers" method="POST" >
          @csrf
          <div class="form-grup mb-3">
            <label for="id_cost" class="form-label">Id Cost</label>
            <input type="text" class="form-control" id="id_cost" name="id_cost">
          </div>
          <div class="form-grup mb-3">
            <label for="nama" class="form-label">Nama </label>
            <input type="text" class="form-control" id="nama" name="nama" value="{{ old('nama')}}">
          </div>
          <div class="form-group-mb-3">
              <label for="no_tlp" class="form table">No Telepone</label>
              <input type="text" class="form-control" id="no_tlp" name="no_tlp" value="{{old('no_tlp')}}">
          </div>
          <div class="form-grup mb-3">
            <label for="alamat" class="form-label">Alamat karyawan</label>
            <input type="text" class="form-control" id="alamat" name="alamat" value="{{old('alamat_kr')}}">
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>

        
      </div>
    </div>

</div>
    
@endsection