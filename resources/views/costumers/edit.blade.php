@extends('layouts.main')


@section('title','Customer')


@section('container')
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h1>Form Ubah Data Karyawan</h1>
   
                <form method="POST" action="/costumers{{$costumers->id}}" >
                @method('patch')
                                 
                @csrf
                <div class="form-group">
                    <label for="id_cost">Id </label>
                    <input type="text" class="form-control" value="{{$costumers->id_cost}}" id="id_cost" name="id_cost">
                </div>

                <div class="form-group">
                    <label for="nama">Nama </label>
                    <input type="text" class="form-control" value="{{$costumers->nama}}" id="nama" name="nama">
                </div>

                <div class="form-group">
                    <label for="no_tlp">No Telepon</label>
                    <input type="text" class="form-control" value="{{$costumers->no_tlp}}" id="no_tlp" name="no_tlp">
                </div>

                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="text" class="form-control" value="{{$costumers->alamat}}" id="alamat" name="alamat">
                </div>

                <button type="submit" class="btn btn-primary mt-3">Submit</button>
                </form>
            </div>
        </div>
    </div>
    
@endsection
    
