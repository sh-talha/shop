@extends('myaccount')
@section('buyerbody')
 <div class="col-md-8">
    <div class="profile-content" style=" margin-bottom:15px;">
    <span style="margin-left:25px;"><h3 style="margin-left:25px;">SELLER DISPUTES . . .</h3></span>
    <hr style="width:95%">
    <table id="customers" class="table ">
        <tbody>
            <tr>
                <th>Order Id</th>
                <th>Tracking id</th>
                <th>Price</th>
                <th>Date</th>
                
            </tr>
            @forelse($ordersdispute as $vieworders)
             <tr>
                <td>{{$vieworders->order_details_id}}</td>
                <td>{{$vieworders->tracking_id}}</td>
                <td>{{$vieworders->total_price}}</td>
                <td>{{$vieworders->date}}</td>
                
            </tr>
            @empty
            <tr>
                <td colspan="6">
                    No order
                </td>
            </tr>
           @endforelse 
           
        </tbody>
    </table>
</div>
</div>
@endsection
@section('activate')
<script>
     ActiveMenu(5);
    ActiveSub(6);

</script>
@endsection