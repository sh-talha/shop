<style>
    img {
        max-width: 100%
    }
    .btn-file {
        position: relative;
        overflow: hidden;
    }
    .btn-file input[type=file] {
        position: absolute;
        top: 0;
        right: 0;
        min-width: 100%;
        min-height: 100%;
        font-size: 100px;
        text-align: right;
        filter: alpha(opacity=0);
        opacity: 0;
        outline: none;
        background: white;
        cursor: inherit;
        display: block;
    }
    .select2-container {
        width: 100% !important;
    }
</style>

<?php $__currentLoopData = $attributes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $attribute): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php if($attribute->type == 'text'): ?>
        <div class="form-group col-md-12">
          <label><?php echo e($attribute->name); ?></label>
          <input type="text" name="attributes[<?php echo e($attribute->id); ?>]" onclick="this.select()" class="form-control" value="<?php echo e((count($old) > 0 && $old[$attribute->id] != '') ? $old[$attribute->id] : $attribute->values->first()->value); ?>">
          <p class="help-block"><?php echo e(ucfirst($attribute->type)); ?></p>
        </div>
    <?php endif; ?>

    <?php if($attribute->type == 'textarea'): ?>
        <div class="form-group col-md-12">
          <label><?php echo e($attribute->name); ?></label>
          <textarea name="attributes[<?php echo e($attribute->id); ?>]" onclick="this.select()" class="form-control"><?php echo e((count($old) > 0 && $old[$attribute->id] != '') ? $old[$attribute->id] : $attribute->values->first()->value); ?></textarea>
          <p class="help-block"><?php echo e(ucfirst($attribute->type)); ?></p>
        </div>
    <?php endif; ?>

    <?php if($attribute->type == 'date'): ?>
        <div class="form-group col-md-12">
          <label><?php echo e($attribute->name); ?></label>
          <input type="date" name="attributes[<?php echo e($attribute->id); ?>]" onclick="this.select()" class="form-control" value="<?php echo e((count($old) > 0 && $old[$attribute->id] != '') ? $old[$attribute->id] : $attribute->values->first()->value); ?>">
          <p class="help-block"><?php echo e(ucfirst($attribute->type)); ?></p>
        </div>
    <?php endif; ?>

    <?php if($attribute->type == 'dropdown' || $attribute->type == 'multiple_select'): ?>
        <div class="form-group col-md-12">
          <label><?php echo e($attribute->name); ?></label>
          <input type="hidden" name="attributes[<?php echo e($attribute->id); ?>]" value="">
          <select name="attributes[<?php echo e($attribute->id); ?>][]" class="form-control select2_field" <?php if($attribute->type == 'multiple_select'): ?> multiple <?php endif; ?>>
            <?php if(count($old) > 0 && isset($old[$attribute->id]) && $old[$attribute->id] != ''): ?>
                <?php $__currentLoopData = $attribute->values; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $option): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($option->value); ?>" <?php if((is_array($old[$attribute->id]) && in_array($option->value, $old[$attribute->id])) || (is_string($old[$attribute->id]) && $old[$attribute->id] == $option->value)): ?> selected <?php endif; ?>><?php echo e($option->value); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php else: ?>
                <?php $__currentLoopData = $attribute->values; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $option): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($option->value); ?>" <?php if($attribute->type == 'multiple_select'): ?> selected <?php endif; ?>><?php echo e($option->value); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
          </select>
          <p class="help-block"><?php echo e(($attribute->type == 'dropdown') ? trans('attribute.dropdown') : trans('attribute.multiple_select')); ?></p>
        </div>
    <?php endif; ?>

    <?php if($attribute->type == 'media'): ?>
        <?php
            $disk = 'attributes';
            Session::put('attribute_'.$attribute->id, (count($old) > 0 && isset($old[$attribute->id]) && $old[$attribute->id] != '') ? $old[$attribute->id] : $attribute->values->first()->value);
        ?>

        <div class="form-group col-md-12">
            <label><?php echo e($attribute->name); ?></label>
              <div class="row">
                <div class="col-sm-6" style="margin-bottom: 20px;">
                    <img id="preview-<?php echo e($attribute->id); ?>" src="<?php echo e(url(config('filesystems.disks.'.$disk.'.simple_path').'/'.((count($old) > 0 && isset($old[$attribute->id]) && $old[$attribute->id] != '') ? $old[$attribute->id] : $attribute->values->first()->value))); ?>">
                </div>
              </div>

            <input type="hidden" name="attributes[<?php echo e($attribute->id); ?>]" value="<?php echo e((count($old) > 0 && isset($old[$attribute->id]) && $old[$attribute->id] != '') ? $old[$attribute->id] : $attribute->values->first()->value); ?>"><br>

            <label class="btn btn-primary btn-file">
                Browse
                <input type="file" data-attribute-id="<?php echo e($attribute->id); ?>" class="form-control">
            </label>

            <p class="help-block"><?php echo e(ucfirst($attribute->type)); ?></p>
        </div>

    <?php endif; ?>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


<script>
    $(document).ready(function() {
        $('.select2_field').select2();
    });

    $('input[type="file"]').on("change", function() {
        var input = this;
        var attributeId = $(this).data('attribute-id');

        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#preview-'+attributeId).attr('src', e.target.result);
                $('input[name="attributes['+attributeId+']"]').val(e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    });
</script>