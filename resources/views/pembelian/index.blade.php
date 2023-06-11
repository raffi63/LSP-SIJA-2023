@extends('adminlte::page')
@section('title', 'List pembelian')
@section('content_header')
<h1 class="m-0 text-light">List pembelian</h1>
@stop
@section('content')
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-body">
<a href="{{route('pembelian.create')}}" class="btn btn-primary mb-2">Tambah</a>
<table class="table table-hover table-bordered table-stripped" id="example2">
<thead>
<tr>
<th>No.</th>
<th>No Nota</th>
<th>Tanggal Beli</th>
<th>Total Beli</th>
<th>Id Distributor</th>
<th>Id User</th>
<th>Opsi</th>
</tr>
</thead>
<tbody>
@foreach($pembelian as $key => $pembelian)
<tr>
<td>{{$key+1}}</td>
<td>{{$pembelian->nonota_beli}}</td>
<td>{{$pembelian->tgl_beli}}</td>
<td>{{$pembelian->total_beli}}</td>
<td>{{$pembelian->fdistributor->nama_distributor }}</td>
<td>{{$pembelian->fusers->name }}</td>
<td>
<a href="{{ route('pembelian.edit', $pembelian) }}" class="btn btn-primary btn-xs">Edit</a>
<a href="{{ route('pembelian.destroy', $pembelian) }}"
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
$('#example2').DataTable({
"responsive": true,
});
function notificationBeforeDelete(event, el) {
event.preventDefault();
if (confirm('Apakah anda yakin akan menghapus data ? ')) {
$("#delete-form").attr('action', $(el).attr('href'));
$("#delete-form").submit();
}
}
</script>
@endpush