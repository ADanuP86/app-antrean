@extends('layouts.main')

@section('container')

<h3>Semua Data Antrean Teller 1</h3>

<br/>

<table class="table table-striped">
    <tr>
        <th>Nasabah</th>
        <th>No Antrean</th>
        <th>Opsi</th>
    </tr>
    
    @foreach($antrean as $an)

    <tr>
        <td>{{ $an->nasabah }}</td>
        <td>{{ $an->no_antre }}</td>
        <td>
            <a href="/panggil1/{{ $an->id }}" onclick="return confirm('Yakin Ingin Panggil Antrean?')" class="btn btn-warning btn-sm"><i class="fa fa-call"></i>&nbsp;Panggil</a>
        </td>
    </tr>

    @endforeach
</table> <br/>

<a href="/tambah1" class="btn btn-success btn-sm"><i class="fa fa-plus"></i>&nbsp;Tambah</a>

<br/>
<br/>

<table class="table table-striped">
    <tr>
        <th>No</th>
        <th>Cabang</th>
        <th>Teller</th>
        <th>Nasabah</th>
        <th>Nomor Antrean</th>
        <th>Status</th>
        <th>Opsi</th>
    </tr>

    <?php
    $no = 1; ?>
    @foreach($teller1all as $t1)

    <tr>
        <td>{{ $no++ }}</td>
        <td>{{ $t1->cabang }}</td>
        <td>{{ $t1->teller }}</td>
        <td>{{ $t1->nasabah }}</td>
        <td>{{ $t1->no_antre }}</td>
        <td>{{ $t1->status }}</td>
        <td>
            <a href="/edit1/{{ $t1->id }}" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i>&nbsp;Ubah</a>
            <a href="/hapus1/{{ $t1->id }}" onclick="return confirm('Yakin Ingin Hapus?')" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i>&nbsp;Hapus</a>
        </td>
    </tr>
    @endforeach
</table>

@endsection
