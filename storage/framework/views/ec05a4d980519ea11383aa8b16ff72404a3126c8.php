<?php $__env->startSection('code-header'); ?>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('htmlheader_title'); ?>
Kelola Akun Mahasiswa
<?php $__env->stopSection(); ?>

<?php $__env->startSection('contentheader_title'); ?>
Kelola Akun Mahasiswa
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main-content'); ?>
<!-- include summernote css/js-->
<div class="flash-message" style="margin-left: -16px;margin-right: -16px; margin-top: 13px;">
  <?php $__currentLoopData = ['danger', 'warning', 'success', 'info']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $msg): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <?php if(Session::has('alert-' . $msg)): ?>
<div class="alert alert-<?php echo e($msg); ?>">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <p class="" style="border-radius: 0"><?php echo e(Session::get('alert-' . $msg)); ?></p>
</div>
  <?php echo Session::forget('alert-' . $msg); ?>

  <?php endif; ?>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<div style="margin-bottom: 10px">
  <!-- Href ini biar diklik masuk ke form tambah -->
  <a href="<?php echo e(url('/karyawan/akun/create')); ?>" type="button" class="btn btn-info btn-md" >
    <i class="fa fa-plus-square"></i> Tambah Akun Mahasiswa</a>
</div>
<div style="overflow: auto">
<table id="myTable" class="table table-striped table-bordered" cellspacing="0">
  <thead>
    <tr>
      <th style="text-align:center">No.</th>
      <th style="text-align:center">NIM</th>  
      <th style="text-align:center">Nama Mahasiswa</th>   
      <th style="text-align:center">Dosen Wali</th>
      <th style="text-align:center">Angkatan</th>   
      <th style="text-align:center">E-mail Mahasiswa</th>    
      <th style="text-align:center">Fakultas</th>
      <th style="text-align:center">Program Studi</th>
      <th style="text-align:center">Foto Mahasiswa</th> 
      <th style="text-align:center">Action</th>

    </tr>
    </thead>
  <tbody>
   <?php $__empty_1 = true; $__currentLoopData = $akunmahasiswa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $bio): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?> 
    <tr>
      <td><?php echo e($i+1); ?></td>
      <td width="10%" style="text-align:center"><?php echo e($bio->nim); ?></td>
      <td width="10%" style="text-align:center"><?php echo e($bio->nama_mhs); ?></td>
      <?php if(($bio->nip_id)!= ''): ?>
      <td width="10%" style="text-align:center"><?php echo e($bio->nama_dosen); ?></td>
      <?php else: ?>
      <td width="10%" style="text-align:center">Belum ada dosen wali</td>
      <?php endif; ?>
      <td width="10%" style="text-align:center"><?php echo e($bio->angkatan); ?></td>
      <td width="10%" style="text-align:center"><?php echo e($bio->email_mhs); ?></td>
      <td width="20%" style="text-align:center">Fakultas Sains dan Teknologi</td>
      <td width="15%" style="text-align:center">S1 Sistem Informasi</td>
      <td width="15%" style="text-align:center"><img src="<?php echo e(URL::asset('/img/foto_mhs/'.$bio->foto_mhs)); ?>" height="100px" width="80px" hspace="5px" vspace="2px" alt="gambar" style="border:2px solid gray" class="img-rounded" ></td>
      <td width="20%" style="text-align:center" ><a onclick="return confirm('Anda yakin untuk menghapus akun ini?');" href="<?php echo e(url('/karyawan/akun/'.$bio->nim.'/delete/')); ?>" class="btn btn-danger btn-xs">
        <i class="fa fa-trash-o"></i> Hapus</a>
        <a href="<?php echo e(url('/karyawan/akun/'.$bio->nim.'/edit/')); ?>" class="btn btn-warning btn-xs">
        <i class="fa fa-pencil-square-o"></i> Edit</a>
        </td>
    </tr>
     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        <tr>
          <td colspan="7"><center>Belum ada akun</center></td>
        </tr>
    <?php endif; ?>
  </tbody>
</table>
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('code-footer'); ?>
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"></script>

<script src="http://cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function(){
    $('#myTable').DataTable();
});
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>