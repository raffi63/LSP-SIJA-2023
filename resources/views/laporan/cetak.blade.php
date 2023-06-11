<style>
    table {
  border-collapse: collapse;
  border: 1px solid #ccc;
  width: 100%;
}

th,
td {
  text-align: center;
  padding: 8px;
  border: 1px solid #ccc;
}
</style>
<h1 class="m-0 text-dark">List Laporan</h1>
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-body">
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
</tr>
@endforeach
</tbody>
</table>
</div>
</div>
</div>
</div>
