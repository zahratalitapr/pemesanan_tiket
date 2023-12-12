@extends('admin.layout.appadmin')
@section('content')

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<form method="POST" action="{{url('admin/member/store')}}" enctype="multipart/form-data">
    <h2 align="center">Transaksi</h2>
    @csrf

  <div class="form-group row">
    <label for="id" class="col-4 col-form-label">Id</label> 
    <div class="col-8">
      <input id="id" name="id"  type="number" class="form-control" >
    </div>
  </div>

  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama</label> 
    <div class="col-8">
      <input id="nama" name="nama" placeholder="Masukan Nama" type="text" class="form-control">
    </div>
  </div>

  <div class="form-group row">
    <label for="email" class="col-4 col-form-label">Email</label> 
    <div class="col-8">
      <input id="email" name="email" placeholder="Masukan Email" type="email" class="form-control">
    </div>
  </div>

  <div class="form-group row">
    <label for="password" class="col-4 col-form-label">Password</label> 
    <div class="col-8">
      <input id="password" name="password" placeholder="Masukan Password" type="password" class="form-control">
    </div>
  </div>

  <div class="form-group row">
    <label for="role" class="col-4 col-form-label">Role</label> 
    <div class="col-8">
      <input id="role" name="role" type="text" class="form-control">
    </div>
  </div>

  <div class="form-group row">
    <label for="foto" class="col-4 col-form-label">Foto</label> 
    <div class="col-8">
      <input id="foto" name="foto" type="image" class="form-control">
    </div>
  </div>
  
  <div class="form-group row">
        <div class="offset-4 col-8">
                <button name="submit" value="submit" type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>

@endsection