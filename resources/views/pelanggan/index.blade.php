@extends('layouts.main')

@section('title','Data karyawan')

@section('container')
<div class="container">
  <div class="row">
    <div class="col-6">
      <h1>Data Costumer</h1>

      <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">No</th>
            <th scope="col">Costumer Id</th>
            <th scope="col">Nama</th>
            <th scope="col">No Telepone</th>
            <th scope="col">Alamat</th>
          </tr>
        </thead>

        <tbody>
          <th>
            <td>Malika</td>
            <td>Antares</td>
            <td>Kuyt</td>
            <td>Narendra</td>
            <td>Cecilion</td>
          </th>
        </tbody>
      </table>
      
    </div>
  </div>
</div>


    
@endsection