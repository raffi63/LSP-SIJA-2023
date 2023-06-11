@extends('adminlte::page')
@section('title', 'List Detail pembelian')
@section('content_header')
<h1 class="m-0 text-light">List Detail pembelian</h1>
@stop
@section('content')
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-body">
<a href="{{ route('detail_pembelian.create') }}" class="btn btn-primary mb-2">Tambah</a>
<table class="table table-hover table-bordered table-stripped" id="example">
<thead>
<tr>
<th>No.</th>
<th>Id pembelian</th>
<th>Tanggal Kadaluarsa</th>
<th>Harga beli</th>
<th>jumlah beli</th>
<th>subtotal beli</th>
<th>Id Obat</th>
<th>Opsi</th>
</tr>
</thead>
<tbody>
@foreach ($detail_pembelian as $key => $dp)
<tr>
<td>{{ $key + 1 }}</td>
<td>{{ $dp->fpembelian->nonota_beli }}</td>
<td>{{ $dp->tgl_kadaluarsa }}</td>
<td>{{ $dp->harga_beli }}</td>
<td>{{ $dp->jumlah_beli }}</td>
<td>{{ $dp->subtotal_beli }}</td>
<td>{{ $dp->fobat->nama_obat }}</td>
<td>
<a href="{{ route('detail_pembelian.edit', $dp) }}" class="btn btn-primary btn-xs">Edit</a>
<a href="{{ route('detail_pembelian.destroy', $dp) }}"
onclick="notificationBeforeDelete(event, this, <?php echo $key + 1; ?>)"
class="btn btn-danger btn-xs">Delete</a>
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
<form action="" id="delete-form" method="post">
@method('delete')
@csrf
</form>
<script>
$('#example').DataTable({
"responsive": true,
});

function notificationBeforeDelete(event, el, dt) {
event.preventDefault();
if (confirm('Apakah anda yakin akan menghapus data Detail pembelian \"' + document.getElementById(dt)
.innerHTML + '\" ?')) {
$("#delete-form").attr('action', $(el).attr('href'));
$("#delete-form").submit();
}
}
</script>
@endpush
