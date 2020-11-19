<?php if($crud->checkIfFieldIsFirstOfItsType($field, $fields)): ?>
  
  

      <?php $__env->startPush('crud_fields_styles'); ?>
          <!-- no styles -->
      <?php $__env->stopPush(); ?>


  
  

      <?php $__env->startPush('crud_fields_scripts'); ?>

        <script src="<?php echo e(asset('js/bigNumber.js')); ?>"></script>

        <script>
          var price = $('input[name="price"]');
          var price_with_vat = $('input[name="price_with_vat"]');
        //   var tax_value = $('#tax').select2({
        //             theme: "bootstrap"
        //         }).find(':selected').data('value');

        $(document).ready(function() {
              price_with_vat.val(price.val())
              price.val(price.val())
              
            $(document).on('keyup', 'input[name="price_with_vat"]', function() {
               var thisValue = parseInt($(this).val()); 
                    if ($(this).val().length > 0) {
                        price_with_vat_val = thisValue.toFixed(2);
                        price.val(price_with_vat_val);
                    } else {
                      price.val('');
                    }
            });
        });
          
          // Calculate price with tax on document ready
        //   $(document).ready(function() {
        //         price_with_vat.val(price.val())
        //     // if (price.val().length > 0 ) {
        //     //     tax_val = new BigNumber(tax_value);
        //     //     price_val = new BigNumber(price.val());

        //     //     priceWithTax = price_val.plus(tax_val.dividedBy(100).times(price_val)).toFixed(2);

        //     //     price_with_vat.val(priceWithTax);
        //     // }
        //   });

          // Calculate price without tax
        //   $(document).on('keyup', 'input[name="price_with_vat"]', function() {
        //     if ($(this).val().length > 0) {
        //         tax_val = new BigNumber(tax_value);
        //         price_with_vat_val = new BigNumber(price_with_vat.val());

        //         priceWithoutTax = price_with_vat_val.dividedBy(tax_val.dividedBy(100).plus(1)).toFixed(2);

        //         price.val(priceWithoutTax);
        //     } else {
        //       price.val('');
        //     }
        //   });

          // Calculate price without on selected tax change
        //   $('#tax').select2({
        //             theme: "bootstrap"
        //         }).on("change", function(e) {
        //     tax_value = $('#tax').select2({
        //             theme: "bootstrap"
        //         }).find(':selected').data('value');

        //     tax_val = new BigNumber(tax_value);
        //     price_with_vat_val = new BigNumber(price_with_vat.val());

        //     priceWithoutTax = price_with_vat_val.dividedBy(tax_val.dividedBy(100).plus(1)).toFixed(2);

        //     price.val(priceWithoutTax);
        //   });
        </script>

      <?php $__env->stopPush(); ?>
<?php endif; ?>