@extends('admin.layout.appadmin')
@section('content')

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<h1 align="center">Pengisian Data tiket</h1><br>

<form method="POST" action="{{url('admin/tiket/store')}}" enctype="multipart/form-data">

@csrf

<div class="form-group row">
    <label for="harga" class="col-4 col-form-label">Harga Tiket</label> 
    <div class="col-8">
      <input id="harga" name="harga" type="text" class="form-control">
    </div>
  </div>

  <div class="form-group row">
    <label for="jadwal_id" class="col-4 col-form-label">Jadwal Id</label> 
    <div class="col-8">
      <input id="jadwal_id" name="jadwal_id" type="text" class="form-control">
    </div>
  </div>

  <div class="form-group row">
    <label for="jenis_tiket_id" class="col-4 col-form-label">jenis tiket Id</label> 
    <div class="col-8">
      <input id="jenis_tiket_id" name="jenis_tiket_id" type="text" class="form-control">
    </div>
  </div>

  <div class="form-group row">
    <label for="rute_id" class="col-4 col-form-label">Rute Id</label> 
    <div class="col-8">
      <input id="rute_id" name="rute_id" type="text" class="form-control">
    </div>
  </div>

  <div class="form-group row">
    <label for="armada_id" class="col-4 col-form-label">Armada id</label> 
    <div class="col-8">
      <input id="armada_id" name="armada_id" type="text" class="form-control">
    </div>
  </div>
  
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" value="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>

@endsection

