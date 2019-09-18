<?php $__env->startSection('code-header'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('htmlheader_title'); ?>
Dashboard
<?php $__env->stopSection(); ?>

<?php $__env->startSection('contentheader_title'); ?>
Dashboard
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main-content'); ?>
 
<?php $__env->stopSection(); ?>
<?php $__env->startSection('code-footer'); ?>
<link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script> 

<?php $__env->stopSection(); ?>

<?php echo $__env->make('adminlte::layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>