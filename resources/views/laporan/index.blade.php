@extends('adminlte::page')
@section('title', 'List Laporan')
@section('content_header')
<h1 class="m-0 text-dark">List Laporan</h1>
@stop
@section('content')
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-body">
<a href="{{route('laporan.create')}}" class="btn btn-primary mb-2">Tambah</a>
<a href="{{url('/downloadpdf')}}" class="btn btn-primary mb-2">Print <i class="fa fa-print" aria-hidden="true"></i></a>
<table class="table table-hover table-bordered table-stripped" id="example">
<thead>
<tr>
<th>No.</th>
<th>Judul</th>
<th>Deskripsi</th>
<th>Tanggal</th>
<th>User</th>
<th>Status</th>
<th>Konten</th>
<th>Opsi</th>
</tr>
</thead>
<tbody>
@foreach($laporan as $key => $laporan)
<tr>
<td>{{ $key+1 }}</td>
<td>{{ $laporan->judul }}</td>
<td>{{ $laporan->deskripsi }}</td>
<td>{{ $laporan->tanggal }}</td>
<td>{{ $laporan->fusers->name }}</td>
<td>{{ $laporan->status }}</td>
<td>{{ $laporan->konten }}</td>
<td>
<a href="{{ route('laporan.edit', $laporan) }}" class="btn btn-primary btn-xs">Edit</a>
<a href="{{ route('laporan.destroy', $laporan) }}"onclick="notificationBeforeDelete(event, this, <?php echo $key + 1; ?>)" class="btn btn-danger btn-xs">Delete</a>
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
function notificationBeforeDelete(event, el) {
event.preventDefault();
if (confirm('Apakah anda yakin akan menghapus data ? ')) {
$("#delete-form").attr('action', $(el).attr('href'));
$("#delete-form").submit();
}
}
</script>
@endpush