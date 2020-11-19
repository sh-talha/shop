<p> <a title="granyupon" href="http://www.granyupon.com"><img src="https://granyupon.com/img/logo.png" alt="granyupon" /></a>  </p>
<h1>Hola, {{ $name }} Gracias por t&uacute; Compra</h1>

 </b>
<p> Pedido completado con &eacute;xito! <br> 
Gracias! Tu compra esta completa. <br>
Pronto recibir&aacute;s noticias sobre tu env&iacute;o.<br>
<b> {{ $order_no }} </b>.</p>
 </b>
<p>Your Order Detail.</p>

<table id="cart" class="table table-hover table-condensed table-responsive" border>
        <thead>
        <tr>
            <th >Product</th>
            <th >Name</th>
            <th >Price</th>
            <th >Color</th>
            <th >size</th>
            <th >Quantity</th>
            <th  class="">Subtotal</th>
        
        </tr>
        </thead>
        <tbody>

        <?php $total = 0 ?>

        @if($order_detail)
            @foreach($order_detail as $id => $details)

                <?php $total += $details['price'] * $details['quantity'] ?>

                <tr>
                    <td data-th="Product">
                        <div class="row">
                            <div class="col-sm-2 hidden-xs">
                                 @if($details["color"] == '')
                                   <img src="{{ asset('uploads/products/'.substr($details["p_id"], 0, 1).'/'.$details["p_id"].'/'.$details["photo"])}}" width="80" height="80" class="img-responsive"/>
                                 @else
                                   <img src="{{$details['photo']}}"  width="80" height="80" class="img-responsive"/>
                                @endif
                                
                            </div>
                        
                        </div>
                    </td>
                    <td>{{ $details['name'] }}</td>
                    <td data-th="Price">{{ $details['price'] }}&euro; </td>
                    <td data-th="color">{{ ($details['color'] == '') ? '-':$details['color'] }}</td>
                    <td data-th="size">{{ ($details['size'] == '') ? '-':  str_replace('-', ' ',$details['size']) }}</td>
                    {{-- <td data-th="size">{{ $details['size'] }}</td> --}}
                    <td data-th="Quantity">
                        {{ $details['quantity'] }}
                    </td>
                    <td data-th="Subtotal" class="text-center">{{ $details['price'] * $details['quantity'] }}&euro;</td>
                
                </tr>
            @endforeach
        @endif

        </tbody>
</table>

<p>Thanks <p/>