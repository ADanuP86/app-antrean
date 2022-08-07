@extends('layouts.main')

@section('container')

<h3>Edit Data Antrean Teller 1</h3>
 
	<a href="/teller1" class="btn btn-danger btn-sm"><i class="fa fa-arrow-left"></i>&nbsp;Kembali</a>
	
	<br/>
	<br/>
 
	@foreach($antrean as $an)
	<form action="/update1" method="post">
		{{ csrf_field() }}
		<div class="mb-3 col-5">
			<label>Cabang</label>
			<input type="hidden" class="form-control" name="id" id="id" value="{{ $an->id }}" required="required">
			<input type="text" class="form-control" name="cabang" id="cabang" value="{{ $an->cabang }}" required="required" readonly>
		</div>
  
		<div class="mb-3 col-5">
			<label>Teller</label>
			<input type="number" class="form-control" name="teller" id="teller" value="1" required="required" readonly>
		</div>
  
		<div class="mb-3 col-5">
			  <label>Nasabah</label>
			  <input type="text" class="form-control" name="nasabah" id="nasabah" value="{{ $an->nasabah }}" required="required">
		</div>
  
		<div class="mb-3 col-5">
			  <label>No Antre</label>
			  <input type="number" class="form-control" name="no_antre" id="no_antre" value="{{ $an->no_antre }}" required="required" readonly>
		</div>
  
		<div class="form-group mb-3 col-5">
			  <label>Status</label>
			  <select class="form-control" name="status" id="status" required="required">
				  <option value="{{ $an->status }}">{{ $an->status }}</option>
				  <option value="menunggu">Menunggu</option>
				  <option value="selesai">Selesai</option>
			  </select>
		</div>

		<button type="submit" class="btn btn-info btn-sm">Submit</button> <br><br>
	</form>
	@endforeach

@endsection
