@extends('adminlte::page')
@section('title', 'Edit Detail Penjualan')
@section('content_header')
<h1 class="m-0 text-light">Edit Detail Penjualan</h1>
@stop
@section('content')
<form action="{{ route('detail_penjualan.update', $detail_penjualan) }}" method="post">
@method('PUT')
@csrf
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-body">

<div class="form-group">
<label for="id_penjualan">Id Penjualan</label>
<div class="input-group">
<input type="hidden" name="id_penjualan" id="id_penjualan"
value="{{ $detail_penjualan->fpenjualan->id ?? old('id_penjualan') }}">
<input type="text" class="form-control @error('nonota_jual') is-invalid @enderror"
placeholder="Id Penjualan" id="nonota_jual" name="nonota_jual"
value="{{ $detail_penjualan->fpenjualan->nonota_jual ?? old('nonota_jual') }}"
aria-label="Id Penjualan" ariadescribedby="cari" readonly>
<button class="btn btn-warning" type="button" data-bs-toggle="modal" id="cari"
data-bs-target="#staticBackdrop1"></i>Cari Data No Nota</button>
</div>
</div>

<div class="form-group">
<label for="jumlah_jual">Jumlah Jual</label>
<input type="text" class="form-control @error('jumlah_jual') is-invalid @enderror"
id="jumlah_jual" placeholder="Jumlah Jual" name="jumlah_jual"
value="{{ $detail_penjualan->jumlah_jual ?? old('jumlah_jual') }}">
@error('jumlah_jual')
<span class="text-danger">{{ $message }}</span>
@enderror
</div>

<div class="form-group">
<label for="harga_jual">Harga Jual</label>
<input type="text" class="form-control @error('harga_jual') is-invalid @enderror"
id="harga_jual" placeholder="Harga Jual" name="harga_jual"
value="{{ $detail_penjualan->harga_jual ?? old('harga_jual') }}">
@error('harga_jual')
<span class="text-danger">{{ $message }}</span>
@enderror
</div>

<div class="form-group">
<label for="subtotal_jual">Subtotal Jual</label>
<input type="text" class="form-control @error('subtotal_jual') is-invalid @enderror"
id="subtotal_jual" placeholder="Subtotal Jual" name="subtotal_jual"
value="{{ $detail_penjualan->subtotal_jual ?? old('subtotal_jual') }}">
@error('subtotal_jual')
<span class="text-danger">{{ $message }}</span>
@enderror
</div>

<div class="form-group">
<label for="id_obat">Nama Obat</label>
<div class="input-group">
<input type="hidden" name="id_obat" id="id_obat"
value="{{ $detail_penjualan->fobat->id ?? old('id_obat') }}">
<input type="text" class="form-control @error('nama_obat') is-invalid @enderror"
placeholder="Nama Obat" id="nama_obat" name="nama_obat"
value="{{ $detail_penjualan->fobat->nama_obat ?? old('nama_obat') }}"
aria-label="Nama Obat" ariadescribedby="cari" readonly>
<button class="btn btn-warning" type="button" data-bs-toggle="modal" id="cari"
data-bs-target="#staticBackdrop2"></i>Cari Data Nama Obat</button>
</div>
</div>

</div>
<div class="card-footer">
<button type="submit" class="btn btn-primary">Simpan</button>
<a href="{{ route('detail_penjualan.index') }}" class="btn btn-danger">Batal</a>
</div>
</div>
</div>
</div>
{{-- Modal1 --}}
<div class="modal fade" id="staticBackdrop1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
<div class="modal-dialog modal-lg modal-dialog-scrollable p-5">
<div class="modal-content">

<div class="modal-header">
<h1 class="modal-title fs-5" id="staticBackdropLabel">Pencarian No Nota</h1>
<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>

<div class="modal-body">
<table class="table table-hover table-bordered table-stripped" id="example1">
<thead>
<tr>
<th>No.</th>
<th>List No Nota</th>
<th>Opsi</th>
</tr>
</thead>
<tbody>
@foreach($penjualan as $key => $penjualan)
<tr>
<td>{{$key+1}}</td>
<td id={{$key+1}}>{{$penjualan->nonota_jual}}</td>
<td>
<button type="button" class="btn btn-primary btn-xs" onclick="pilih1('{{$penjualan->id}}', '{{$penjualan->nonota_jual}}')" data-bs-dismiss="modal">Pilih</button>
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
<h1 class="modal-title fs-5" id="staticBackdropLabel">Pencarian Data Nama Obat</h1>
<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<div class="modal-body">

<table class="table table-hover table-bordered table-stripped" id="example2">
<thead>
<tr>
<th>No.</th>
<th>Nama Obat</th>
<th>Opsi</th>
</tr>
</thead>
<tbody>
@foreach($obat as $key => $obat)
<tr>
<td>{{$key+1}}</td>
<td id={{$key+1}}>{{$obat->nama_obat}}</td>
<td>
<button type="button" class="btn btn-primary btn-xs" onclick="pilih2('{{$obat->id}}', '{{$obat->nama_obat}}')" data-bs-dismiss="modal">Pilih</button>
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
function pilih1(id, nonota_jual){
document.getElementById('id_penjualan').value = id
document.getElementById('nonota_jual').value = nonota_jual
}
</script>
<script>
$('#example2').DataTable({
"responsive": true, 
});
function pilih2(id, nama_obat){
document.getElementById('id_obat').value = id
document.getElementById('nama_obat').value = nama_obat
} 

function hitungSubtotal() {
const hargajual = parseFloat(document.getElementById('harga_jual').value);
const jumlahjual = parseFloat(document.getElementById('jumlah_jual').value);
const subtotaljual = hargajual * jumlahjual;
document.getElementById('subtotal_jual').value = subtotaljual.toFixed(2);
}

document.getElementById('harga_jual').addEventListener('input', hitungSubtotal);
document.getElementById('jumlah_jual').addEventListener('input', hitungSubtotal);
</script> 
@endpush