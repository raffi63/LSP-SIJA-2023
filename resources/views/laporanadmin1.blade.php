@extends('adminlte::page')
@section('title', 'Apotek | Dashboard Laporan')
@section('content_header')
<h1 class="m-0 text-light">Laporan</h1>
@stop
@section('content')
<div class="container">
<div class="row justify-content-center">
<div class="col-md-12">
<div class="card">
<div class="card-header">
Data Pembelian
</div>

<div class="card-body ">
<form method="get" action="{{ route('laporanadmin1') }}" class="form-inline">
<div class="form-group mb-2">
<label for="start" class="">Tanggal Beli:</label>
<input type="date" class="form-control" id="start" name="start"
placeholder="Tanggal Mulai" value="{{ old('start') }}">
</div>
<button type="submit" class="btn btn-navy bg-gradient-navy mb-2">Filter</button>
</form>

<div class="table-responsive">
<table id="tlaporan" class="table table-striped table-bordered table-hover">
<thead class="thead-inverse">
<tr>
<th>No Nota Beli</th>
<th>Tanggal Beli</th>
<th>Total Beli</th>
<th>Obat</th>
</tr>
</thead>
<tbody>
@foreach ($data as $key => $value)
<tr>
<td>{{ $value->nonota_beli }}</td>
<td>{{ $value->tgl_beli }}</td>
<td>{{ $value->total_beli }}</td>
<td>{{ $value->fdpembelian->fobat->nama_obat }}</td>
</tr>
@endforeach
</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
</div>
@endsection