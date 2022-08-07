@extends('layouts.main')

@section('container')

<h3>Semua Data Antrean</h3>
 
{{-- <a href="/tambah" class="btn btn-success btn-sm"><i class="fa fa-plus"></i>&nbsp;Tambah</a> --}}

<br/>

<table class="table table-striped">
    <tr>
        <th>No</th>
        <th>Cabang</th>
        <th>Teller</th>
        <th>Nasabah</th>
        <th>Nomor Antrean</th>
        <th>Status</th>
        {{-- <th>Opsi</th> --}}
    </tr>

    <?php
    $no = 1; ?>
    @foreach($antrean as $an)

    <tr>
        <td>{{ $no++ }}</td>
        <td>{{ $an->cabang }}</td>
        <td>{{ $an->teller }}</td>
        <td>{{ $an->nasabah }}</td>
        <td>{{ $an->no_antre }}</td>
        <td>{{ $an->status }}</td>
        {{-- <td>
            <a href="/edit/{{ $an->id }}" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i>&nbsp;Ubah</a>
            <a href="/hapus/{{ $an->id }}" onclick="return confirm('Yakin Ingin Hapus?')" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i>&nbsp;Hapus</a>
        </td> --}}
    </tr>
    @endforeach
</table>

@endsection
