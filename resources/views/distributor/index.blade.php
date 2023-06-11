@extends('adminlte::page')
@section('title', 'List Distributor')
@section('content_header')
<h1 class="m-0 text-light">List Distributor</h1>
@stop
@section('content')
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-body">
<a href="{{route('distributor.create')}}" class="btn btn-primary mb-2">Tambah</a>
<table class="table table-hover table-bordered table-stripped" id="example2">
<thead>
<tr>
<th>No.</th>
<th>Nama</th>
<th>Alamat</th>
<th>Telp</th>
<th>Opsi</th>
</tr>
</thead>
<tbody>
@foreach($distributor as $key => $distributor)
<tr>
<td>{{$key+1}}</td>
<td>{{$distributor->nama_distributor}}</td>
<td>{{$distributor->alamat}}</td>
<td>{{$distributor->telp}}</td>
<td>
<a href="{{route('distributor.edit', $distributor)}}" class="btn btn-primary btn-xs">Edit</a>
<a href="{{route('distributor.destroy', $distributor)}}" onclick="notificationBeforeDelete(event, this)" class="btn btn-danger btn-xs">Delete</a>
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