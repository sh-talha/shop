<select class="form-control" name="city" >
                       
                    
@foreach($state as $view_state)
	
	<option value="{{$view_state->id}}">{{$view_state->name}}</option>

@endforeach

</select>