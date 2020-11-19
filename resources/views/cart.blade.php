@extends('website_layout.layout')
@section('body')
<!-- Start Banner Area -->
<section class="banner-area organic-breadcrumb">
    <div class="container">
    </div>
</section>
<!-- End Banner Area -->
<div class="container" style="border: 3px solid #ECECEC;">
  <br>
    @if(session('success'))

        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table id="cart" class="table table-hover table-condensed table-responsive">
        <thead>
        <tr>
            <th style="width:38%">Product</th>
            <th style="width:10%">Price</th>
            <th style="width:5%">Color</th>
            <th style="width:7%">size</th>
            <th style="width:8%">Quantity</th>
            <th style="width:22%" class="text-center">Subtotal</th>
            <th style="width:10%"></th>
        </tr>
        </thead>
        <tbody>

        <?php $total = 0 ?>

        @if(session('cart'))
            @foreach(session('cart') as $id => $details)

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
                            <div class="col-sm-3">
                            </div>
                            <div class="col-sm-7">
                                <h4 class="nomargin">{{ $details['name'] }}</h4>
                            </div>
                        </div>
                    </td>
                    <td data-th="Price">{{ $details['price'] }}&euro; </td>
                    <td data-th="color">{{ ($details['color'] == '') ? '-':$details['color'] }}</td>
                    <td data-th="size">{{ ($details['size'] == '') ? '-':  str_replace('-', ' ',$details['size']) }}</td>
                    {{-- <td data-th="size">{{ $details['size'] }}</td> --}}
                    <td data-th="Quantity">
                        <input type="number" value="{{ $details['quantity'] }}" class="form-control quantity" />
                    </td>
                    <td data-th="Subtotal" class="text-center">{{ $details['price'] * $details['quantity'] }}&euro;</td>
                    <td class="actions" data-th="">

                        <button class="btn btn-info btn-sm update-cart" data-id="{{ $id }}"><i class="fa fa-refresh"></i></button>
                        <button class="btn btn-danger btn-sm remove-from-cart" data-id="{{ $id }}"><i class="fa fa-trash-o"></i></button>
                        
                    </td>
                </tr>
            @endforeach
        @endif

        </tbody>
        <tfoot>
        <tr class="visible-xs">
            {{-- <td class="text-center"><strong>Total {{ $total }}&euro;</strong></td> --}}
        <tr>
          
            <td colspan="2" class="hidden-xs"></td>
            <td colspan="2" class="hidden-xs"></td>
            <td colspan="1" class="hidden-xs"></td>
            <td class="hidden-xs text-center"><strong>Total {{ $total }} &euro;</strong></td>
            <td colspan="1" class="hidden-xs"></td>
           
        </tr>
        </tr>

        </tfoot>
    </table>
    
</div>
<div class="container">
    <br>
    <div class="row  mb-3">
        <div class=" col-md-12">
            
        <button class="btn btn-warning "><a href="{{ route('shop',app()->getLocale()) }}" style="color: black" ><i class="fa fa-angle-left"></i> {{ __('base.continue_shopping')}}</a></button>
  <button class="btn btn-warning float-right"  id='checkout_btn'>{{ __('base.realizar')}} <i class="fa fa-angle-right"></i></button>
        </div>

    </div>
</div>
@endsection

@section('activate')
<script>
     ActiveMenu(6);
</script>
@endsection
