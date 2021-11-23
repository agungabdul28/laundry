@extends('layouts._login')

@section('title','Login')

@section('container')

 <div class="container mt-4">
  
  <form action="{{route('postLogin')}}" method="post">
    @csrf
    <div class="mb-3 row justify-content-center">
      <h1 class="text-center">Login</h1>  
      <div class="col-sm-3">
        
        <div class="form-group">
          <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
          <input type="text" class="form-control" id="email" name="email" placeholder="Email">
        </div>

        <div class="form-group">
          <label for="staticEmail" class="col-sm-2 col-form-label">Password</label>
          <input type="password" class="form-control" id="password" name="password" placeholder="Password">
        </div>

        <button class="btn btn-primary btn-block mt-3">Login</button>

      </div>
    </div>
  </form>
 </div>
    
@endsection
