<?php $__env->startSection('code-header'); ?>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('htmlheader_title'); ?>
Penilaian AHP
<?php $__env->stopSection(); ?>

<?php $__env->startSection('contentheader_title'); ?>
Penilaian AHP
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main-content'); ?>
<div class="form-group">
    <label for="" class="col-sm-2 control-label">Kriteria</label>
    <label for="" class="col-sm-2 control-label">Adopsi</label>
    <label for="" class="col-sm-2 control-label">Penderita</label>
    <label for="" class="col-sm-2 control-label">Piatu</label>
    <label for="" class="col-sm-1 control-label">Prematur</label><br><br>
    <label for="" class="col-sm-2 control-label">Adopsi</label>
      <div class="col-md-2" ><select class="form-control" name="kriteria">
        <option disabled value="">-Select Kriteria-</option>  
        <?php $__currentLoopData = $value_array; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <option value="<?php echo e($data->id); ?>"><?php echo e($data->value==1); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>                   
      </div>
      <div class="col-md-2" ><select class="form-control" name="kriteria">
          <option value="">-Select Kriteria-</option>
          <?php $__currentLoopData = $value_array; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <option value="<?php echo e($data->id); ?>"><?php echo e($data->value); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>                   
      </div>
      <div class="col-md-2" ><select class="form-control" name="kriteria">
          <option value="">-Select Kriteria-</option>
          <?php $__currentLoopData = $value_array; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <option value="<?php echo e($data->id); ?>"><?php echo e($data->value); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>                   
      </div>
      <div class="col-md-2" ><select class="form-control" name="kriteria">
          <option value="">-Select Kriteria-</option>
          <?php $__currentLoopData = $value_array; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <option value="<?php echo e($data->id); ?>"><?php echo e($data->value); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>                   
      </div><br><br>
      <label for="" class="col-sm-2 control-label">Penderita</label>
      <div class="col-md-2" ><select class="form-control" name="kriteria">
          <option value="">-Select Kriteria-</option>
          <?php $__currentLoopData = $value_array; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <option value="<?php echo e($data->id); ?>"><?php echo e($data->value); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>                   
      </div>
      <div class="col-md-2" ><select class="form-control" name="kriteria">
          <option disabled value="">-Select Kriteria-</option>
          <?php $__currentLoopData = $value_array; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <option value="<?php echo e($data->id); ?>"><?php echo e($data->value==1); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>                   
      </div>
      <div class="col-md-2" ><select class="form-control" name="kriteria">
          <option value="">-Select Kriteria-</option>
          <?php $__currentLoopData = $value_array; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <option value="<?php echo e($data->id); ?>"><?php echo e($data->value); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>                   
      </div>
      <div class="col-md-2" ><select class="form-control" name="kriteria">
          <option value="">-Select Kriteria-</option>
          <?php $__currentLoopData = $value_array; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <option value="<?php echo e($data->id); ?>"><?php echo e($data->value); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>                   
      </div><br><br>
      <label for="" class="col-sm-2 control-label">Piatu</label>
      <div class="col-md-2" ><select class="form-control" name="kriteria">
          <option value="">-Select Kriteria-</option>
          <?php $__currentLoopData = $value_array; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <option value="<?php echo e($data->id); ?>"><?php echo e($data->value); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>                   
      </div>
      <div class="col-md-2" ><select class="form-control" name="kriteria">
          <option value="">-Select Kriteria-</option>
          <?php $__currentLoopData = $value_array; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <option value="<?php echo e($data->id); ?>"><?php echo e($data->value); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>                   
      </div>
      <div class="col-md-2" ><select class="form-control" name="kriteria">
          <option disabled value="">-Select Kriteria-</option>
          <?php $__currentLoopData = $value_array; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <option value="<?php echo e($data->id); ?>"><?php echo e($data->value==1); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>                   
      </div>
      <div class="col-md-2" ><select class="form-control" name="kriteria">
          <option value="">-Select Kriteria-</option>
          <?php $__currentLoopData = $value_array; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <option value="<?php echo e($data->id); ?>"><?php echo e($data->value); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>                   
      </div><br><br>
      <label for="" class="col-sm-2 control-label">Prematur</label>
      <div class="col-md-2" ><select class="form-control" name="kriteria">
          <option value="">-Select Kriteria-</option>
          <?php $__currentLoopData = $value_array; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <option value="<?php echo e($data->id); ?>"><?php echo e($data->value); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>                   
      </div>
      <div class="col-md-2" ><select class="form-control" name="kriteria">
          <option value="">-Select Kriteria-</option>
          <?php $__currentLoopData = $value_array; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <option value="<?php echo e($data->id); ?>"><?php echo e($data->value); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>                   
      </div>
      <div class="col-md-2" ><select class="form-control" name="kriteria">
          <option value="">-Select Kriteria-</option>
          <?php $__currentLoopData = $value_array; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <option value="<?php echo e($data->id); ?>"><?php echo e($data->value); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>                   
      </div>
      <div class="col-md-2" ><select class="form-control" name="kriteria">
          <option disabled value="">-Select Kriteria-</option>
          <?php $__currentLoopData = $value_array; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <option value="<?php echo e($data->id); ?>"><?php echo e($data->value==1); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>                   
      </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('code-footer'); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('adminlte::layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>