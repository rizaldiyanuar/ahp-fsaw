@extends('adminlte::layouts.app')

@section('htmlheader_title')
Tambah Data Resipien
@endsection

@section('contentheader_title')
Tambah Data Resipien
@endsection

@section('code-header')

<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.js"></script> 
<link rel="stylesheet" href="{{ asset('/css/dropzone.css') }}">

@endsection

@section('main-content')
<style>
	.form-group label{
		text-align: left !important;
	}
</style>
	<!-- Ini buat menampilkan notifikasi -->
	@foreach (['danger', 'warning', 'success', 'info'] as $msg)
	@if(Session::has('alert-' . $msg))
<div class="alert alert-{{ $msg }}">
	<p class="" style="border-radius: 0">{{ Session::get('alert-' . $msg) }}</p>
</div>
	{!!Session::forget('alert-' . $msg)!!}
	@endif
	@endforeach


<div class="row">
	<div class="col-md-12">
		<div class="">

			@if (count($errors) > 0)
			<div class="alert alert-danger">
				<ul>
					@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
			@endif
			<br>
			<form id="tambahKonferensi" method="post" action="{{url('/resipien/biodata-resipien/create')}}" enctype="multipart/form-data"  class="form-horizontal">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">

				<!-- Menampilkan input text biasa -->

				<div class="form-group">
					<label for="" class="col-sm-2 control-label">NIR</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-lg" id="nir" name="nir" placeholder="Masukkan NIR" required>
					</div>
				</div>
				<div class="form-group">
					<label for="" class="col-sm-2 control-label">Nama Bayi Resipien</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-lg" id="nama_bayi_resipien" name="nama_bayi_resipien" placeholder="Masukkan Nama Bayi Resipien" required>
					</div>
				</div>

				<div class="form-group">
					<label for="" class="col-sm-2 control-label">Agama</label>
					<div class="col-md-8"><select class="form-control" name="agama">
							<option value="Islam">Islam</option>
							<option value="Protestan">Protestan</option>
							<option value="Katolik">Katolik</option>
							<option value="Hindu">Hindu</option>
							<option value="Budha">Budha</option>
							<option value="Khonghucu">Khonghucu</option>
						  	</select>                   
					</div>
				</div>

				<div class="form-group">
					<label for="" class="col-sm-2 control-label">Jenis Kelamin</label>
					<div class="col-md-8"><select class="form-control" name="jenis_kelamin">
						<option value="Laki-laki">Laki-laki</option>
						<option value="Perempuan">Perempuan</option>
						</select>
					</div>
				</div>

				<!-- Menampilkan tanggal dengan datepicker -->
				<div class="form-group">
					<label for="" class="col-sm-2 control-label">Tanggal Lahir</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-lg" id="datepicker" name="tanggal_lahir_bayi" placeholder="Masukkan Tanggal Lahir Bayi" required>
					</div>
				</div>
				
				<div class="form-group">
					<label for="" class="col-sm-2 control-label">Kriteria</label>
						<div class="col-md-8" >  <select class="form-control" name="kriteria">
						  <option value="Adopsi">Adopsi</option>
						  <option value="Penderita">Penderita</option>
						  <option value="Piatu">Piatu</option>
						  <option value="Prematur">Prematur</option>
						  </select>                   
					  </div>
			 	</div>

				<div class="form-group">
					<label for="" class="col-sm-2 control-label">Nama Ibu</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-lg" id="nama_ibu_resipien" name="nama_ibu_resipien" placeholder="Masukkan Ibu Resipien" required>
					</div>
				</div>

				<div class="form-group">
					<label for="" class="col-sm-2 control-label">Alamat</label>
					<div class="col-md-8">                 
						  <textarea class="form-control input-lg" id="alamat" name="alamat" placeholder="Masukkan Alamat Resipien" rows="5" required></textarea>
					</div>
				</div>

				<div class="form-group text-center">
					<div class="col-md-8 col-md-offset-2">
					<button type="submit" class="btn btn-primary btn-lg">
							Confirm
						</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
@endsection

@section('code-footer')
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
$( function() {
    var date = $('#datepicker').datepicker({ dateFormat: 'yy/mm/dd' }).val();

  } );
  </script>
@endsection

