@extends('adminlte::page')
@section('title', 'Edit Obat')
@section('content_header')
<h1 class="m-0 text-dark">Edit Obat</h1>
@stop
@section('content')
<form action="{{ route('obat.update', $obat) }}" method="post">
@method('PUT')
@csrf
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-body">
<div class="form-group">
<label for="exampleInputKodeObat">Kode Obat</label>
<input type="text" class="form-control @error('kode_obat') is-invalid @enderror"
id="exampleInputKodeObat" placeholder="Kode Obat" name="kode_obat"
value="{{ $obat->kode_obat ?? old('kode_obat') }}">
@error('kode_obat')
<span class="text-danger">{{ $message }}</span>
@enderror
</div>
<div class="form-group">
<label for="exampleInputNamaObat">Nama Obat</label>
<input type="text" class="form-control @error('nama_obat') is-invalid @enderror"
id="exampleInputNamaObat" placeholder="Nama Obat" name="nama_obat"
value="{{ $obat->nama_obat ?? old('nama_obat') }}">
@error('nama_obat')
<span class="text-danger">{{ $message }}</span>
@enderror
</div>
<div class="form-group">
<label for="exampleInputMerk">Merk</label>
<input type="text" class="form-control @error('merk') is-invalid @enderror"
id="exampleInputMerk" placeholder="Merk Obat" name="merk"
value="{{ $obat->merk ?? old('merk') }}">
@error('merk')
<span class="text-danger">{{ $message }}</span>
@enderror
</div>
<div class="form-group">
<label for="exampleInputJenis">Jenis</label>
<input type="text" class="form-control @error('jenis') is-invalid @enderror"
id="exampleInputJenis" placeholder="Jenis Obat" name="jenis"
value="{{ $obat->jenis ?? old('jenis') }}">
@error('jenis')
<span class="text-danger">{{ $message }}</span>
@enderror
</div>
<div class="form-group">
<label for="exampleInputGolongan">Golongan</label>
<input type="text" class="form-control @error('golongan') is-invalid @enderror"
id="exampleInputGolongan" placeholder="Golongan Obat" name="golongan"
value="{{ $obat->golongan ?? old('golongan') }}">
@error('golongan')
<span class="text-danger">{{ $message }}</span>
@enderror
</div>
<div class="form-group">
<label for="exampleInputKemasan">Kemasan</label>
<input type="text" class="form-control @error('kemasan') is-invalid @enderror"
id="exampleInputKemasan" placeholder="Kemasan Obat" name="kemasan"
value="{{ $obat->kemasan ?? old('kemasan') }}">
@error('kemasan')
<span class="text-danger">{{ $message }}</span>
@enderror
</div>
<div class="form-group">
<label for="exampleInputSatuan">Satuan</label>
<input type="text" class="form-control @error('satuan') is-invalid @enderror"
id="exampleInputSatuan" placeholder="Satuan Obat i.e ml/gr" name="satuan"
value="{{ $obat->satuan ?? old('satuan') }}">
@error('satuan')
<span class="text-danger">{{ $message }}</span>
@enderror
</div>
<div class="form-group">
<label for="exampleInputHargaJual">Harga Jual</label>
<input type="text" class="form-control @error('harga_jual') is-invalid @enderror"
id="exampleInputHargaJual" placeholder="Harga Jual" name="harga_jual"
value="{{ $obat->harga_jual ?? old('harga_jual') }}">
@error('harga_jual')
<span class="text-danger">{{ $message }}</span>
@enderror
</div>
<div class="form-group">
<label for="exampleInputStok">Stok</label>
<input type="text" class="form-control @error('stok') is-invalid @enderror"
id="exampleInputStok" placeholder="Stok Obat" name="stok"
value="{{ $obat->stok ?? old('stok') }}">
@error('stok')
<span class="text-danger">{{ $message }}</span>
@enderror
</div>
</div>
<div class="card-footer">
<button type="submit" class="btn btn-primary">Simpan</button>
<a href="{{ route('obat.index') }}" class="btn btn-danger">Batal</a>
</div>
</div>
</div>
</div>
@stop
