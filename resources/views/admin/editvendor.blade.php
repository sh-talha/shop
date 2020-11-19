<form class="row contact_form" action="{{url('admin/updatevendor')}}" method="post" id="contactForm" enctype="multipart/form-data">
<div class="modal-body">
  <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
    <div id="Editproduct" >
    	<br><br>
        
    	@foreach($vendor as $viewvendor)
    		 <div class="row" id="row_add_{{$viewvendor->vendo_product_id}}">
                <div class="form-group col-md-1 add_row" id="cross_id_{{$viewvendor->vendo_product_id}}" ><i class="fa fa-close" style="font-size:28px;color:red;margin-left: 10px;display: none"></i></div>
    		  <div class="form-group col-md-3 add_row" style="margin-left: -10px" >
    		  	<input type="text" name="vendorid[]" style="display: none" value="{{$viewvendor->vendo_product_id}}">

    		    <select  name="productid[]" class="form-control">

    		        <option  value="{{$viewvendor->product_id}}">{{$viewvendor->name}}</option>
    		       
    	        </select>
    		  </div>
    		  <div class="form-group col-md-3">
    		   <select class="form-control" name="color[]">

                @foreach($size as $viewsize)
                  <option {{($viewvendor->color == $viewsize->value )? 'selected ':''}} value="{{$viewsize->value}}">{{$viewsize->value}}</option>
                @endforeach
    		    
             </select>
    		  </div>
    		  <div class="form-group col-md-4 img_align" >
    		    <div class="form-horizontal">
    		     <div class="form-group">
    		       	<div id="coba{{$viewvendor->vendo_product_id}}" class="row"> 

    		       </div>
    		     </div>
    		    </div>
    		  </div>
            <div class="form-group col-md-1" style="margin-left: -80px">
                <input type="button" class="btn btn-danger" onclick="deleterow({{$viewvendor->vendo_product_id}},'{{$viewvendor->image}}')"  value="Delete">
            </div>
    		</div>

    		<script type="text/javascript">
    			
    			$("#coba{{$viewvendor->vendo_product_id}}").spartanMultiImagePicker({

    			    fieldName:        'fileUpload[]',
    			    maxCount:         1,
    			    rowHeight:        '200px',
    			    groupClassName:   'col-md-4 col-sm-4 col-xs-6',
    			    maxFileSize:      '',
    			    placeholderImage: {
    			        image: '{{ asset(Storage::url('upload/vendor_products/'.$viewvendor->image))}}',
    			        width : '100%'
    			    },

    			    dropFileLabel : "Drop Here",
    			    onAddRow:       function(index){
    			        console.log(index);
    			        console.log('add new row');
    			    },
    			    onRenderedPreview : function(index){
    			        console.log(index);
    			        console.log('preview rendered');
    			    },
    			    onRemoveRow : function(index){
    			        console.log(index);
    			    },
    			    onExtensionErr : function(index, file){
    			        console.log(index, file,  'extension err');
    			        alert('Please only input png or jpg type file')
    			    },
    			    onSizeErr : function(index, file){
    			        console.log(index, file,  'file size too big');
    			        alert('File size too big');
    			    }
    			});

    		</script>
        
    	@endforeach
       
    </div>
   

</div>
<div class="modal-footer">

  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
  <button type="submit" class="btn btn-default" >Edit Vendor product </button>

</div>

</form>

