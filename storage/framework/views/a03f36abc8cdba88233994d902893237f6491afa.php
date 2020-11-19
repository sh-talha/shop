<div id="render-attributes"></div>

<?php
  if (isset($entry)) {
      $attributesData = [];

      foreach ($entry->attributes as $attribute) {
        $attr_id  = $attribute->pivot->attribute_id;
        $attr_val = $attribute->pivot->value;

        if (array_key_exists($attr_id, $attributesData)) {
            if (is_array($attributesData[$attr_id])) {
              $attributesData[$attr_id][] = $attr_val;
            } else {
              $aux = $attributesData[$attr_id];
              $attributesData[$attr_id] = [];
              $attributesData[$attr_id][] = $aux;
              $attributesData[$attr_id][] = $attr_val;
            }
        } else {
              $attributesData[$attr_id] = $attr_val;
        }
      }
    }
?>


<?php if($crud->checkIfFieldIsFirstOfItsType($field, $fields)): ?>
  
  

      <?php $__env->startPush('crud_fields_styles'); ?>
          <!-- no styles -->
      <?php $__env->stopPush(); ?>


  
  

      <?php $__env->startPush('crud_fields_scripts'); ?>

        <script>
          // Send old values if default value was replaced
          var oldData, oldSetId;

          // On edit populate attributes values from attribute_product_value
          <?php if(isset($attributesData) && count($attributesData) > 0 ): ?>
            var oldData = '<?php echo json_encode($attributesData, JSON_NUMERIC_CHECK); ?>';
          <?php endif; ?>

          // Set oldData and oldSetId if old input data is sent
          <?php if(is_array(old('attributes')) && count(old('attributes')) > 0): ?>
            // Encode old input data as json
            var oldData = '<?php echo json_encode(old('attributes'), JSON_NUMERIC_CHECK); ?>';

            // Get old set id
            var oldSetId = $('#attributes-set').val();
          <?php endif; ?>
          // Get attributes fields by attributes set id via ajax
          function getAttributes(setId) {
            // Set oldData to "null" if attributes set was changed
            if(typeof(oldSetId) != 'undefined' && oldSetId != setId) {
                oldData = null;
            }

            // Ajax call
            $.ajax({
                url: "<?php echo e(route('getAttrBySetId')); ?>",
                type: 'POST',
                data: {
                  setId: setId,
                  old: oldData,
                }
              })
              .done(function(response) {
                // Render ajax response
                $('#render-attributes').html(response).prepend("<div class='row'><div class='col-md-12 well' style='margin: 15px 0px !important;'><h3 style='margin: 0;'>"+$('#attributes-set option:selected').text()+"</h3></div></div>");

                // Reinitalize select2
                $('.select2_field').select2("destroy");
                $('.select2_field').select2({
                    theme: "bootstrap"
                });
              });
          }

          // Render attributes on attributes set change
          $('#attributes-set').select2({
              theme: "bootstrap"
          }).on("change", function(e) {
              getAttributes($(this).val());
          });

          // Render attributes fields on document ready
          $(document).ready(function() {
            var setId = $('#attributes-set').val();
            getAttributes(setId);
          });
        </script>

      <?php $__env->stopPush(); ?>
<?php endif; ?>