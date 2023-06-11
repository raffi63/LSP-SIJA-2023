@extends('adminlte::page')
@section('title', 'Edit pembelian')
@section('content_header')
<h1 class="m-0 text-light">Edit pembelian</h1>
@stop
@section('content')
<form action="{{ route('penjualan.update', $penjualan )}}" method="post">
@method('PUT')
@csrf
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-body">

<div class="form-group">
<label for="nonota_jual">No Nota Jual</label>
<input type="text" class="form-control @error('nonota_jual') is-invalid @enderror" id="nonota_jual" placeholder="Kode Penjualan" name="nonota_jual"
value="{{ $penjualan->nonota_jual ?? old('nonota_jual') }}">
@error('nonota_jual')
<span class="text-danger">{{ $message }}</span>
@enderror
</div>

<div class="form-group">
<label for="tgl_jual">Tanggal Jual</label>
<input type="date" class="form-control
@error('tgl_jual') is-invalid @enderror" id="tgl_jual" placeholder="Masukkan Tanggal Jual" name="tgl_jual"
value="{{ $penjualan->tgl_jual ?? old('tgl_jual') }}">
@error('tgl_jual')
<span class="text-danger">{{ $message }}</span>
@enderror
</div>

<div class="form-group">
<label for="total_jual">Total Jual</label>
<input type="text" class="form-control
@error('total_jual') is-invalid @enderror" id="total_jual" placeholder="Masukkan Total Penjualan"
name="total_jual" value="{{ $penjualan->total_jual ?? old('total_jual') }}">
@error('total_jual')
<span class="text-danger">{{ $message }}</span>
@enderror
</div>

<div class="form-group">
<label for="id_users">Id Users</label>
<div class="input-group">
<input type="hidden" name="id_users" id="id_users" value="{{ $penjualan->fusers->id ?? old('id_users') }}">
<input type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Nama User" id="name" name="name" value="{{ $penjualan->fusers->name ?? old('name') }}" aria-label="Nama User" aria-describedby="cari" readonly>
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
{{-- Modal --}}
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
$('#example2').DataTable({
"responsive": true, 
});
function pilih2(id, name){
document.getElementById('id_users').value = id
document.getElementById('name').value = name
} 
</script> 
@endpush
