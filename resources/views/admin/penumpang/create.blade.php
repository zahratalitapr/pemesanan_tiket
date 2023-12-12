@extends('admin.layout.appadmin')
@section('content')

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<form method="POST" action="{{url('admin/penumpang/store')}}" enctype="multipart/form-data">
  @csrf
  <div class="form-group row">
    <label for="text" class="col-4 col-form-label">Nama</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text"></div>
        </div> 
        <input id="text" name="nama" placeholder="Masukan nama anda" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Gender</label> 
    <div class="col-8">
        @foreach ($gender as $g)
        @php
        $cek = (old('g') === $g) ? 'checked':''; @endphp
      <div class="custom-control custom-radio custom-control-inline">
        <input name="gender" id="radio_0" type="radio" class="form-check-input" value="{{$g}}"> 
        <label for="radio_0" class="form-check-label">{{$g}}</label>
      </div>
      @endforeach
    </div>
  </div>
  <div class="form-group row">
    <label for="text1" class="col-4 col-form-label">No Telepon</label> 
    <div class="col-8">
      <input id="text1" name="no_telepon" placeholder="Masukan no.telepon anda" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="text2" class="col-4 col-form-label">Berat bawaan</label> 
    <div class="col-8">
      <input id="text2" name="berat_bawaan" placeholder="Berat bawaan anda" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="text3" class="col-4 col-form-label">Password</label> 
    <div class="col-8">
      <input id="password" name="password" placeholder="Masukan Password anda" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="text4" class="col-4 col-form-label">Foto</label> 
    <div class="col-8">
      <input id="text4" name="foto" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" value="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
@endsection