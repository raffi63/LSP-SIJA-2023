@extends('adminlte::page')
@section('title', 'Tambah Detail Pembelian')
@section('content_header')
<h1 class="m-0 text-light">Tambah Detail pembelian</h1>
@stop
@section('content')
<form action="{{ route('detail_pembelian.store') }}" method="post">
@csrf
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-body">
<div class="form-group">
<label for="nonota_beli">No Nota</label>
<div class="input-group">
<input type="hidden" name="id_pembelian" id="id_pembelian"
value="{{ old('id_pembelian') }}">
<input type="text" class="form-control @error('nonota_beli') is-invalid @enderror"
placeholder="No Nota Beli" id="nonota_beli" name="nonota_beli"
value="{{ old('nonota_beli') }}" aria-label="No Nota" aria-describedby="cari" readonly>
<button class="btn btn-warning" type="button" data-bs-toggle="modal" id="cari"
data-bs-target="#staticBackdrop1"></i>Cari No Nota</button>
</div>
</div>
<div class="form-group">
<label for="tgl_kadaluarsa">Tanggal Kadaluarsa</label>
<input type="date" class="form-control
@error('tgl_kadaluarsa') is-invalid @enderror" id="tgl_kadaluarsa" placeholder="" name="tgl_kadaluarsa"
value="{{ old('tgl_kadaluarsa') }}">
@error('tgl_kadaluarsa')
<span class="text-danger">{{ $message }}</span>
@enderror
</div>
<div class="form-group">
<label for="harga_beli">Harga Beli</label>
<input type="text" class="form-control
@error('harga_beli') is-invalid @enderror" id="harga_beli" placeholder="Masukkan Harganya" name="harga_beli"
value="{{ old('harga_beli') }}">
@error('harga_beli')
<span class="text-danger">{{ $message }}</span>
@enderror
</div>
<div class="form-group">
<label for="jumlah_beli">Jumlah Beli</label>
<input type="text" class="form-control
@error('jumlah_beli') is-invalid @enderror" id="jumlah_beli" placeholder="Masukkan Jumlah Pembelian"
name="jumlah_beli" value="{{ old('jumlah_beli') }}">
@error('jumlah_beli')
<span class="text-danger">{{ $message }}</span>
@enderror
</div>
<div class="form-group">
<label for="subtotal_beli">Subtotal Beli</label>
<input type="text" class="form-control
@error('subtotal_beli') is-invalid @enderror" id="subtotal_beli" placeholder="Masukkan SubTotal"
name="subtotal_beli" value="{{ old('subtotal_beli') }}">
@error('subtotal_beli')
<span class="text-danger">{{ $message }}</span>
@enderror
</div>
<div class="form-group">
<label for="persen_margin_jual">Persen Margin Jual</label>
<input type="text" class="form-control
@error('persen_margin_jual') is-invalid @enderror" id="persen_margin_jual"
placeholder="Masukkan Persen Keuntungan" name="persen_margin_jual"
value="{{ old('persen_margin_jual') }}">
@error('persen_margin_jual')
<span class="text-danger">{{ $message }}</span>
@enderror
</div>

<div class="form-group">
<label for="id_obat">Id Obat</label>
<div class="input-group">
<input type="hidden" name="id_obat" id="id_obat" value="{{ old('id_obat') }}">
<input type="text" class="form-control @error('nama_obat') is-invalid @enderror" placeholder="Nama Distributor" id="nama_obat" name="nama_obat" value="{{ old('nama_obat') }}" aria-label="Nama Distributor" aria-describedby="cari" readonly>
<button class="btn btn-warning" type="button" data-bs-toggle="modal" id="cari" data-bs-target="#staticBackdrop2"></i>Cari Obat</button>
</div>

<div class="card-footer">
<a href="{{ route('detail_pembelian.create') }}"><button type="submit"
class="btn btn-primary">Simpan dan Lagi</button></a>
<a href="{{ route('pembelian.index') }}"><button type="submit" class="btn btn-danger">Batal
dan Selesai</button></a>
</div>
</div>
</div>
</div>
<!-- Modal -->
<div class="modal fade" id="staticBackdrop1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
aria-labelledby="staticBackdropLabel" aria-hidden="true">
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
<th>No Nota</th>
<th>Opsi</th>
</tr>
</thead>
<tbody>
@foreach ($pembelian as $key => $pembelian)
<tr>
<td>{{ $key + 1 }}</td>
<td id={{ $key + 1 }}>{{ $pembelian->nonota_beli }}</td>
<td>
<button type="button" class="btn btn-primary btn-xs"
onclick="pilih1('{{ $pembelian->id }}', '{{ $pembelian->nonota_beli }}')"
data-bs-dismiss="modal">Pilih</button>
</td>
</tr>
@endforeach
</tbody>
</table>
</div>
</div>
</div>
</div>
<!-- End Modal -->
<!-- Modal -->
<div class="modal fade" id="staticBackdrop2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
aria-labelledby="staticBackdropLabel" aria-hidden="true">
<div class="modal-dialog modal-lg modal-dialog-scrollable p-5">
<div class="modal-content">
<div class="modal-header">
<h1 class="modal-title fs-5" id="staticBackdropLabel">Pencarian No Nota</h1>
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
@foreach ($obat as $key => $obat)
<tr>
<td>{{ $key + 1 }}</td>
<td>{{ $obat->nama_obat }}</td>
<td>
<button type="button" class="btn btn-primary btn-xs"
onclick="pilih2('{{ $obat->id }}', '{{ $obat->nama_obat }}')"
data-bs-dismiss="modal">Pilih</button>
</td>
</tr>
@endforeach
</tbody>
</table>
</div>
</div>
</div>
</div>
<!-- End Modal -->
@stop
@push('js')
<script>
$('#example1').DataTable({
"responsive": true,
});
function pilih1(id, nonota_beli) {
document.getElementById('id_pembelian').value = id
document.getElementById('nonota_beli').value = nonota_beli
}
</script>
<script>
$('#example2').DataTable({
"responsive": true,
});
function pilih2(id, nama_obat) {
document.getElementById('id_obat').value = id
document.getElementById('nama_obat').value = nama_obat
}

function hitungSubtotal() {
const hargaBeli = parseFloat(document.getElementById('harga_beli').value);
const jumlahBeli = parseFloat(document.getElementById('jumlah_beli').value);
const subtotalBeli = hargaBeli * jumlahBeli;
document.getElementById('subtotal_beli').value = subtotalBeli.toFixed(2);
}
document.getElementById('harga_beli').addEventListener('input', hitungSubtotal);
document.getElementById('jumlah_beli').addEventListener('input', hitungSubtotal);

function ubahPersenKeDesimal() {
const persenMarginJual = document.getElementById('persen_margin_jual').value;
if (persenMarginJual.endsWith('%')) {
const percentage = parseFloat(persenMarginJual.slice(0, -1)) / 100;
document.getElementById('persen_margin_jual').value = percentage.toFixed(2);
}
}
document.getElementById('persen_margin_jual').addEventListener('input', ubahPersenKeDesimal);
</script>
@endpush
