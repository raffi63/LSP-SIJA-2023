@extends('adminlte::page')
@section('title', 'Edit pembelian')
@section('content_header')
<h1 class="m-0 text-light">Edit pembelian</h1>
@stop
@section('content')
<form action="{{ route('pembelian.update', $pembelian )}}" method="post">
@method('PUT')
@csrf
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-body">

<div class="form-group">
<label for="nonota_beli">No Nota Beli</label>
<input type="text" class="form-control @error('nonota_beli') is-invalid @enderror" id="nonota_beli" placeholder="Kode pembelian" name="nonota_beli"
value="{{ $pembelian->nonota_beli ?? old('nonota_beli') }}">
@error('nonota_beli')
<span class="text-danger">{{ $message }}</span>
@enderror
</div>

<div class="form-group">
<label for="tgl_beli">Tanggal Beli</label>
<input type="date" class="form-control
@error('tgl_beli') is-invalid @enderror" id="tgl_beli" placeholder="Nama lengkap" name="tgl_beli"
value="{{ $pembelian->tgl_beli ?? old('tgl_beli') }}">
@error('tgl_beli')
<span class="text-danger">{{ $message }}</span>
@enderror
</div>

<div class="form-group">
<label for="total_beli">Total Beli</label>
<input type="text" class="form-control
@error('total_beli') is-invalid @enderror" id="total_beli" placeholder="Masukkan Total Pembelian"
name="total_beli" value="{{ $pembelian->total_beli ?? old('total_beli') }}">
@error('total_beli')
<span class="text-danger">{{ $message }}</span>
@enderror
</div>

<div class="form-group">
<label for="id_distributor">Id Distributor</label>
<div class="input-group">
<input type="hidden" name="id_distributor" id="id_distributor" value="{{ $pembelian->fdistributor->id ?? old('id_distributor') }}">
<input type="text" class="form-control @error('nama_distributor') is-invalid @enderror" placeholder="Nama Distributor" id="nama_distributor" name="nama_distributor" value="{{ $pembelian->fdistributor->nama_distributor ?? old('nama_distributor') }}" aria-label="Nama Distributor" aria-describedby="cari" readonly>
<button class="btn btn-warning" type="button" data-bs-toggle="modal" id="cari" data-bs-target="#staticBackdrop1"></i>Cari Data Bidang Distributor</button>
</div>

<div class="form-group">
<label for="id_users">Id Users</label>
<div class="input-group">
<input type="hidden" name="id_users" id="id_users" value="{{ $pembelian->fusers->id ?? old('id_users') }}">
<input type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Nama Distributor" id="name" name="name" value="{{ $pembelian->fusers->name ?? old('name') }}" aria-label="Nama User" aria-describedby="cari" readonly>
<button class="btn btn-warning" type="button" data-bs-toggle="modal" id="cari" data-bs-target="#staticBackdrop2"></i>Cari Data User</button>
</div>

<div class="card-footer">
<button type="submit" class="btn btn-primary">Simpan</button>
<a href="{{ route('pembelian.index') }}" class="btn btn-danger">Batal</a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
{{-- Modal1 --}}
<div class="modal fade" id="staticBackdrop1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
<div class="modal-dialog modal-lg modal-dialog-scrollable p-5">
<div class="modal-content">

<div class="modal-header">
<h1 class="modal-title fs-5" id="staticBackdropLabel">Pencarian Data Distributor</h1>
<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>

<div class="modal-body">
<table class="table table-hover table-bordered table-stripped" id="example1">
<thead>
<tr>
<th>No.</th>
<th>Distributor</th>
<th>Opsi</th>
</tr>
</thead>
<tbody>
@foreach($distributor as $key => $distributor)
<tr>
<td>{{$key+1}}</td>
<td id={{$key+1}}>{{$distributor->nama_distributor}}</td>
<td>
<button type="button" class="btn btn-primary btn-xs" onclick="pilih1('{{$distributor->id}}', '{{$distributor->nama_distributor}}')" data-bs-dismiss="modal">Pilih</button>
</td>
</tr>
@endforeach
</tbody>
</table>
</div>
</div>
</div>
</div> 
{{-- Modal2 --}}
<div class="modal fade" id="staticBackdrop2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
<div class="modal-dialog modal-lg modal-dialog-scrollable p-5">
<div class="modal-content">
<div class="modal-header">
<h1 class="modal-title fs-5" id="staticBackdropLabel">Pencarian Data Users</h1>
<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<div class="modal-body">

<table class="table table-hover table-bordered table-stripped" id="example2">
<thead>
<tr>
<th>No.</th>
<th>Users</th>
<th>Opsi</th>
</tr>
</thead>
<tbody>
@foreach($users as $key => $users)
<tr>
<td>{{$key+1}}</td>
<td id={{$key+1}}>{{$users->name}}</td>
<td>
<button type="button" class="btn btn-primary btn-xs" onclick="pilih2('{{$users->id}}', '{{$users->name}}')" data-bs-dismiss="modal">Pilih</button>
</td>
</tr>
@endforeach
</tbody>
</table>
</div>
</div>
</div>
</div> 
@stop
@push('js') 
<script> 
$('#example1').DataTable({
"responsive": true, 
});
function pilih1(id, nama_distributor){
document.getElementById('id_distributor').value = id
document.getElementById('nama_distributor').value = nama_distributor
}
</script>
<script>
$('#example2').DataTable({
"responsive": true, 
});
function pilih2(id, name){
document.getElementById('id_users').value = id
document.getElementById('name').value = name
} 
</script> 
@endpush
