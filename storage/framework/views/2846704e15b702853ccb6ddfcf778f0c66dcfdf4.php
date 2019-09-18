<?php $__env->startSection('code-header'); ?>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('htmlheader_title'); ?>
Verifikasi Prestasi dan Penelitian Mahasiswa
<?php $__env->stopSection(); ?>

<?php $__env->startSection('contentheader_title'); ?>
Verifikasi Prestasi dan Penelitian Mahasiswa
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main-content'); ?>
<!-- Kodingan HTML ditaruh di sini -->

<!-- Main content -->
    <section align="center" class="main-content">
      <!-- Small boxes (Stat box) -->
      <div align="center" class="row">
        <div align="center" class="col-lg-3 col-xs-6">
        <br>
        <br>
          <!-- small box -->
          <div align="center" margin class="small-box bg-aqua">
            <div align="center" class="inner">
              <p><?php echo e($count_prestasi); ?> Prestasi</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="<?php echo e(url('/karyawan/verifikasi/prestasi')); ?>" class="small-box-footer">Lihat <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <br>
        <br>
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <p><?php echo e($count_penelitian); ?> Penelitian</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="<?php echo e(url('/karyawan/verifikasi/penelitian')); ?>" class="small-box-footer">Lihat <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
    	</div>
    </section>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('code-footer'); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>