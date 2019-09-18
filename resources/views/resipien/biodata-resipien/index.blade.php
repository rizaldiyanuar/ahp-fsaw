@extends('adminlte::layouts.app')

@section('code-header')

@endsection

@section('htmlheader_title')
Data Resipien
@endsection

@section('contentheader_title')
Data Resipien
@endsection

@section('main-content')
<!-- include summernote css/js-->
<div class="flash-message" style="margin-left: -16px;margin-right: -16px; margin-top: 13px;">
  @foreach (['danger', 'warning', 'success', 'info'] as $msg)
  @if(Session::has('alert-' . $msg))
<div class="alert alert-{{ $msg }}">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <p class="" style="border-radius: 0">{{ Session::get('alert-' . $msg) }}</p>
</div>
  {!!Session::forget('alert-' . $msg)!!}
  @endif
  @endforeach
</div>
<div style="margin-bottom: 10px">
  <!-- Href ini biar diklik masuk ke form tambah -->
  <a href="{{url('/resipien/biodata-resipien/create')}}" type="button" class="btn btn-info btn-md" >
    <i class="fa fa-plus-square"></i> Tambah Data Resipien</a>
  <a href="{{url('/ahp/kriteria/')}}" type="button" class="btn btn-success" >
    <i class="fa fa-plus-square"></i> Perhitungan AHP</a>
</div>
<div style="overflow: auto">
<table id="myTable" class="table table-striped table-bordered" cellspacing="0">
  <thead>
    <tr>
      <th style="text-align:center">No.</th>
      <th style="text-align:center">id</th>      
      <th style="text-align:center">Nama Bayi Resipien</th>
      <th style="text-align:center">Nama Ibu Resipien</th>
      <th style="text-align:center">Agama</th>
      <th style="text-align:center">Jenis Kelamin</th>
      <th style="text-align:center">Tanggal Lahir Bayi</th>
      <th style="text-align:center">Alamat Resipien</th>
      <th style="text-align:center">Kriteria</th>
      <th style="text-align:center">Action</th>
    </tr>
    </thead>
  <tbody>
   @forelse($resipien as $i => $resipien)
    <tr>
      <td>{{ $i+1 }}</td>
      <td width="20%" style="text-align:center">{{$resipien->nir}}</td>
      <td width="20%" style="text-align:center">{{$resipien->nama_bayi_resipien}}</td>
      <td width="20%" style="text-align:center">{{$resipien->nama_ibu_resipien}}</td>
      <td width="20%" style="text-align:center">{{$resipien->agama}}</td>      
      <td width="20%" style="text-align:center">{{$resipien->jenis_kelamin}}</td>
      <td width="20%" style="text-align:center">{{$resipien->tanggal_lahir_bayi}}</td>
      <td width="20%" style="text-align:center">{{$resipien->alamat}}</td>
      <td width="20%" style="text-align:center">{{$resipien->kriteria}}</td>
      <td width="20%" style="text-align:center" >  <a onclick="return confirm('Anda yakin untuk menghapus data resipien ini?');" href="{{url('/resipien/biodata-resipien/'.$resipien->nir.'/delete/')}}" class="btn btn-danger btn-xs">
        <i class="fa fa-trash-o"></i> Hapus</a>
        <a href="{{url('/resipien/biodata-resipien/'.$resipien->nir.'/edit/')}}" class="btn btn-warning btn-xs">
        <i class="fa fa-pencil-square-o"></i> Edit</a>
        </td>
    </tr>
     @empty
        <tr>
          <td colspan="10"><center>Belum Ada Data Resipien</center></td>
        </tr>
    @endforelse
  </tbody>
</table>
</div>

@endsection

@section('code-footer')

@endsection