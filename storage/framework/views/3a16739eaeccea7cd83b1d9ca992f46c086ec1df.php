<?php $__env->startSection('code-header'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('htmlheader_title'); ?>
Data Resipien
<?php $__env->stopSection(); ?>

<?php $__env->startSection('contentheader_title'); ?>
Data Resipien
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
  <a href="<?php echo e(url('/resipien/biodata-resipien/create')); ?>" type="button" class="btn btn-info btn-md" >
    <i class="fa fa-plus-square"></i> Tambah Data Resipien</a>
  <a href="<?php echo e(url('/ahp/kriteria/')); ?>" type="button" class="btn btn-success" >
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
   <?php $__empty_1 = true; $__currentLoopData = $resipien; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $resipien): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
    <tr>
      <td><?php echo e($i+1); ?></td>
      <td width="20%" style="text-align:center"><?php echo e($resipien->nir); ?></td>
      <td width="20%" style="text-align:center"><?php echo e($resipien->nama_bayi_resipien); ?></td>
      <td width="20%" style="text-align:center"><?php echo e($resipien->nama_ibu_resipien); ?></td>
      <td width="20%" style="text-align:center"><?php echo e($resipien->agama); ?></td>      
      <td width="20%" style="text-align:center"><?php echo e($resipien->jenis_kelamin); ?></td>
      <td width="20%" style="text-align:center"><?php echo e($resipien->tanggal_lahir_bayi); ?></td>
      <td width="20%" style="text-align:center"><?php echo e($resipien->alamat); ?></td>
      <td width="20%" style="text-align:center"><?php echo e($resipien->kriteria); ?></td>
      <td width="20%" style="text-align:center" >  <a onclick="return confirm('Anda yakin untuk menghapus data resipien ini?');" href="<?php echo e(url('/resipien/biodata-resipien/'.$resipien->nir.'/delete/')); ?>" class="btn btn-danger btn-xs">
        <i class="fa fa-trash-o"></i> Hapus</a>
        <a href="<?php echo e(url('/resipien/biodata-resipien/'.$resipien->nir.'/edit/')); ?>" class="btn btn-warning btn-xs">
        <i class="fa fa-pencil-square-o"></i> Edit</a>
        </td>
    </tr>
     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        <tr>
          <td colspan="10"><center>Belum Ada Data Resipien</center></td>
        </tr>
    <?php endif; ?>
  </tbody>
</table>
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('code-footer'); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>