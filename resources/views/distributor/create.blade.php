@extends('adminlte::page')
@section('title', 'Tambah distributor')
@section('content_header')
<h1 class="m-0 text-light">Tambah distributor</h1>
@stop
@section('content')
<form action="{{route('distributor.store')}}" method="post">
@csrf
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-body">
<div class="form-group">
<label for="exampleInputNamaDistributor">Nama Distributor</label>
<input type="text" class="form-control @error('nama_distributor') is-invalid @enderror" id="exampleInputNamaDistributor"
placeholder="Masukkan Nama Distributor" name="nama_distributor" value="{{old('nama_distributor')}}">
@error('nama_distributor') <span class="text-danger">{{$message}}</span> @enderror
</div>
<div class="form-group">
<label for="exampleInputAlamat">Alamat</label>
<input type="text" class="form-control
@error('alamat') is-invalid @enderror" id="exampleInputAlamat"
placeholder="Masukkan Alamat" name="alamat" value="{{old('alamat')}}">
@error('alamat') <span class="text-danger">{{$message}}</span> @enderror
</div>
<div class="form-group">
<label for="exampleInputTelp">telp</label>
<input type="text" class="form-control
@error('telp') is-invalid @enderror" id="exampleInputTelp"
placeholder="Masukkan telp" name="telp" value="{{old('telp')}}">
@error('telp') <span class="text-danger">{{$message}}</span> @enderror
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