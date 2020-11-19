@extends('myaccount')
@section('buyerbody')
<div class="col-md-8">
    <div class="profile-content" style=" margin-bottom:15px;">
    <span style="margin-left:25px;"><h3 style="margin-left:25px;">SELLER . . .</h3></span>
    <hr style="width:95%">

    <table id="customers" class="table ">
        <tbody>
            <tr>
                <th>Product Id</th>
                <th>Name</th>
                <th>date</th>
            </tr>
            @forelse($reportinfo as $viewreportinfo)
            <tr>
                <td>{{$viewreportinfo->product_id}}</td>
                <td>{{$viewreportinfo->name}}</td>
                <td>{{$viewreportinfo->date}}</td>
                
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
    ActiveSub(7);

</script>
@endsection