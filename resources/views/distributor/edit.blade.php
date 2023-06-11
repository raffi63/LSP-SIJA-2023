@extends('adminlte::page')
@section('title', 'Edit distributor')
@section('content_header')
<h1 class="m-0 text-light">Edit distributor</h1>
@stop
@section('content')
<form action="{{route('distributor.update', $distributor)}}" method="post">
@method('PUT')
@csrf
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-body">
<div class="form-group">
<label for="exampleInputNamaDistributor">Nama Distributor</label>
<input type="text" class="form-control @error('nama_distributor') is-invalid @enderror" id="exampleInputNamaDistributor" placeholder="Masukkan Nama Distributor" name="nama_distributor" value="{{$distributor->nama_distributor ?? old('nama_distributor')}}">
@error('name') <span class="text-danger">{{$message}}</span> @enderror
</div>
<div class="form-group">
<label for="exampleInputAlamat">Alamat</label>
<input type="text" class="form-control @error('alamat') is-invalid @enderror" id="exampleInputAlamat" placeholder="Masukkan Alamat" name="alamat" value="{{$distributor->alamat ?? old('alamat')}}">
@error('name') <span class="text-danger">{{$message}}</span> @enderror
</div>
<div class="form-group">
<label for="exampleInputTelp">Telp</label>
<input type="text" class="form-control @error('telp') is-invalid @enderror" id="exampleInputTelp" placeholder="Masukkan No Telp" name="telp" value="{{$distributor->telp ?? old('telp')}}">
@error('name') <span class="text-danger">{{$message}}</span> @enderror
</div>
</div>
<div class="card-footer">
<button type="submit" class="btn btn-primary">Simpan</button>
<a href="{{route('distributor.index')}}" class="btn btn-danger">Batal</a>
</div>
</div>
</div>
</div>
@stop