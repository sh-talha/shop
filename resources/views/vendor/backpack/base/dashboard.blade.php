@extends('backpack::layout')

@section('header')
    <section class="content-header">
      <h1>
        {{ trans('backpack::base.dashboard') }}<small>{{ trans('backpack::base.first_page_you_see') }}</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ url(config('backpack.base.route_prefix', 'admin')) }}">{{ config('backpack.base.project_name') }}</a></li>
        <li class="active">{{ trans('backpack::base.dashboard') }}</li>
      </ol>
    </section>
@endsection


@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="box box-default">
                <div class="box-header with-border">
                    <div class="box-title">{{ trans('backpack::base.login_status') }}</div>
                    <hr>
                    @if(Auth::user()->active == 0 )
                      <h1>Your account was created and is now pending administrator approval</h1> 
                    @elseif(Auth::user()->active == 1 )
                      <h4>You account is activate</h4> 
                    @elseif(Auth::user()->active == 2 )
                      <h1>Your account has been disabled</h1> 
                    @endif
                </div>
                @if(Auth::user()->roles[0]->pivot->role_id == 1)
                <div class="col-md-12">
                  <h1>Messages</h1>

                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Message</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $count=1?>
                      

                      @forelse($contactuss as $viewcontactus)

                      <tr>
                        <th scope="row">{{$count++}}</th>
                        <td>{{$viewcontactus->name}}</td>
                        <td>{{$viewcontactus->Email}}</td>
                        <td>{{$viewcontactus->Message}}</td>
                        
                      </tr>
                       @empty
                       <td colspan="4">
                            No Result Found.
                        
                      </td>
                       @endforelse
                      
                    </tbody>
                  </table>
                  
                </div>
                @endif
                
              
                <div class="box-body">{{ trans('backpack::base.logged_in') }}</div>
            </div>
        </div>
    </div>
@endsection
