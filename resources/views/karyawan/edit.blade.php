@extends('layouts.main')


@section('title','karyawan')


@section('container')
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h1>Form Ubah Data Karyawan</h1>

                <form method="POST" action="/{{$karyawans->id}}" >
                @method('patch')

                @csrf
                <div class="form-group">
                    <label for="id_kr">Id Karyawan</label>
                    <input type="text" class="form-control" value="{{$karyawans->id_kr}}" id="id_kr" name="id_kr">
                </div>

                <div class="form-group">
                    <label for="nama_kr">Nama Karyawan</label>
                    <input type="text" class="form-control" value="{{$karyawans->nama_kr}}" id="id_kr" name="nama_kr">
                </div>

                <div class="form-group">
                    <label for="alamat_kr">Id Karyawan</label>
                    <input type="text" class="form-control" value="{{$karyawans->alamat_kr}}" id="alamat_kr" name="alamat_kr">
                </div>
                
                <button type="submit" class="btn btn-primary mt-3">Submit</button>
                </form>
            </div>
        </div>
    </div>
    
@endsection
    
