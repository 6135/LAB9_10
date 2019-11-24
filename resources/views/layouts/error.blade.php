@if ($errors->any())
    <div class="alert alert-danger">
      	<ul>
        	@foreach ($errors->all() as $error)
        		<li><p style="text-align: center">{{$error}}</p></li>
        	@endforeach
    	</ul>
	</div>
@endif