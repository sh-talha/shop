<div class="form-group col-md-12">
	<div class="dropzone sortable dz-clickable sortable">
	    <div class="dz-message">
	    	Drop files here or click to upload.
	    </div>
	     <?php 

	     if(Request::is('admin/products/create')){
	    	    
	     }else{

	    ?>
		<?php if( $entry->images->count() ): ?>
		    <?php $__currentLoopData = $entry->images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			    <div class="dz-preview" data-id="<?php echo e($image->id); ?>">
			    	<img class="dropzone-thumbnail" src=<?php echo e(asset('uploads/products/'.$image->name)); ?>>
					<a class="dz-remove" href="javascript:void(0);" data-remove="<?php echo e($image->id); ?>">Remove file</a>
			    </div>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		<?php endif; ?>

		<?php
				
			}
		?>
	</div>
</div>


<?php if($crud->checkIfFieldIsFirstOfItsType($field, $fields)): ?>
  
  

	<?php $__env->startPush('crud_fields_styles'); ?>
		<style>
			.sortable { list-style-type: none; margin: 0; padding: 0; width: 100%; overflow: auto;}
			.sortable { margin: 3px 3px 3px 0; padding: 1px; float: left; width: 120px; height: 120px; vertical-align:bottom; text-align: center;}
			.dropzone-thumbnail {
				width: 120px;
				height: 120px;
				cursor: move !important;
			}
			.dropzone {
				width: 100%;
				height: 270px;
			}
		</style>
	<?php $__env->stopPush(); ?>


  
  

      <?php $__env->startPush('crud_fields_scripts'); ?>

  		<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
		<script src="https://rawgit.com/enyo/dropzone/master/dist/dropzone.js"></script>
		<link rel="stylesheet" href="https://rawgit.com/enyo/dropzone/master/dist/dropzone.css">
		        <script>
		        	Dropzone.autoDiscover = false;
		        	var uploaded = false;
		        	<?php if(Request::is('admin/products/create')){
		        	  ?>	

		        	  var dropzone = new Dropzone(".dropzone", {
	        	  		url: "<?php echo e(route('createProductImages')); ?>",
		        	  	uploadMultiple: true,
		        	  	acceptedFiles: '<?php echo e(implode(',',$field['mimes'])); ?>',
		        	  	addRemoveLinks: true,
			        	  // autoProcessQueue: false,
		        	  	maxFilesize: <?php echo e($field['filesize']); ?>,
		        	  	parallelUploads: 10,
		        	  		// previewTemplate:

			  			    error: function(file, response) {

			  		            $(file.previewElement).find('.dz-error-message').remove();
			  		            $(file.previewElement).remove();

			  		            $(function(){
			  		              new PNotify({
			  		                title: file.name+" was not uploaded!",
			  		                text: response,
			  		                type: "error",
			  		                icon: false
			  		              });
			  		            });

			  			    },
			  			    	// previewTemplate:
		  			    	sending: function(file, xhr, formData) {
		  			            formData.append("_token", $('[name=_token').val());
		  			            
		  			        },
			  			    success : function(file, images){
			    		        $('.dropzone').empty();

			    		        $.each(images, function(index, val) {
			    	        	 	$('.dropzone').append('<div class="dz-preview" data-id="'+val.id+'"><img class="dropzone-thumbnail" src="<?php echo e(url(config('filesystems.disks.products.simple_path'))); ?>/'+val.name+'" /><a class="dz-remove" href="javascript:void(0);" data-remove="'+val.id+'">Remove file</a></div>')

			    	        	 		// alert(val.name);
			    		        });

			  			        $(function(){
			  		              new PNotify({
			  		                title: false,
			  		                text: 'Image(s) was successfully uploaded!',
			  		                type: "success",
			  		                icon: false
			  		              });
			  		            });
			  			    }
		        	  		
		        	  });

		        	<?php
		        	}else{
		    		?>
						var dropzone = new Dropzone(".dropzone", {
							url: "<?php echo e(route('uploadProductImages')); ?>",
							uploadMultiple: true,
							acceptedFiles: '<?php echo e(implode(',',$field['mimes'])); ?>',
							addRemoveLinks: true,
							// autoProcessQueue: false,
							maxFilesize: <?php echo e($field['filesize']); ?>,
							parallelUploads: 10,
							// previewTemplate:
							sending: function(file, xhr, formData) {
						        formData.append("_token", $('[name=_token').val());
						        formData.append("id", <?php echo e($entry->id); ?>);
						    },
						    error: function(file, response) {

					            $(file.previewElement).find('.dz-error-message').remove();
					            $(file.previewElement).remove();

					            $(function(){
					              new PNotify({
					                title: file.name+" was not uploaded!",
					                text: response,
					                type: "error",
					                icon: false
					              });
					            });

						    },
						    success : function(file, images){
						        $('.dropzone').empty();
						        $.each(images, function(index, val) {
					        	 	$('.dropzone').append('<div class="dz-preview" data-id="'+val.id+'"><img class="dropzone-thumbnail" src="<?php echo e(url(config('filesystems.disks.products.simple_path'))); ?>/'+val.name+'" /><a class="dz-remove" href="javascript:void(0);" data-remove="'+val.id+'">Remove file</a></div>')
						        });

						        $(function(){
					              new PNotify({
					                title: false,
					                text: 'Image(s) was successfully uploaded!',
					                type: "success",
					                icon: false
					              });
					            });
						    }
						});
					<?php 
					}
					?>
					// Reorder images
					$(".dropzone").sortable({
					    items: '.dz-preview',
					    cursor: 'move',
					    opacity: 0.5,
					    containment: '.dropzone',
					    distance: 20,
					    scroll: true,
					    tolerance: 'pointer',
					    stop: function (event, ui) {
					        var idsOrder = [];

					        $('.dz-preview').each(function() {
					        	idsOrder.push($(this).data('id'))
					        });

					        $.ajax({
					        	url: '<?php echo e(route('reorderProductImages')); ?>',
					        	type: 'POST',
					        	data: {
					        		order: idsOrder,
					        	},
					        })
					        .done(function(resp) {
					        	console.log(resp);
					        });
					    }
					});

					// Delete image
					$(document).on('click', '.dz-remove', function () {
						var id = $(this).data('remove');

						$.ajax({
							url: '<?php echo e(route('deleteProductImage')); ?>',
							type: 'POST',
							data: {
								id: id
						 	},
						})
						.done(function(status) {
							var notification_type;

							if (status.success) {
								notification_type = 'success';
								$('div.dz-preview[data-id="'+id+'"]').remove();
							} else {
								notification_type = 'error';
							}

							$(function(){
				              new PNotify({
				                text: status.message,
				                type: notification_type,
				                icon: false
				              });
				            });
						});

					});

				</script>
       

      <?php $__env->stopPush(); ?>
<?php endif; ?>
