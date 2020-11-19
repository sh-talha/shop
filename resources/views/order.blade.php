@extends('myaccount')
@section('buyerbody')
<div class="col-md-8">
    <div class="profile-content" style=" margin-bottom:15px;">

      <span style="margin-left:25px;"><h3 style="margin-left:25px;">Your Orders . . .</h3></span>
       
        <hr>
         <div class="container">
            <table id="customers" class="table table-responsive">
                <tbody>
                    <tr>
                        <th>Tracking Id</th>
                        <th>Address</th>
                        <th>Date</th>
                        <th>Total Amount</th>
                        <th>Order Status</th>
                        <th>Action</th>
                    </tr>
                    @forelse($orders as $vieworders)
                    <tr>
                        <td>{{$vieworders->tracking_id}}</td>
                        <td>{{$vieworders->address}}</td>
                        <td>{{$vieworders->created_at}}</td>
                        <td>{{$vieworders->total}}</td>
                        <td>{{$vieworders->status}}</td>
                        <td>
                            <button  class="btn btn-xs btn-default " onclick="OrderView({{$vieworders->tracking_id}},{{$vieworders->order_id}})">
                                <i class="fa fa-eye"></i> View</a>
                            </button>
                            <button  class="btn btn-xs btn-default " {{($vieworders->statusid != 1 )? 'disabled':''}} onclick="disputeorder({{$vieworders->tracking_id}},{{$vieworders->order_id}})">
                                <i class="fa fa-delete"></i> Dispute</a>
                            </button>
                           
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
</div>
@endsection
@section('activate')
<script>
     ActiveMenu(5);
     ActiveSub(5);


</script>
@endsection