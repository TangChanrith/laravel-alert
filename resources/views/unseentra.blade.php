@if (session()->has('alert.message'))
    <div class="alert alert-box alert-{{ session()->get('alert.style') }} alert-dismissible fade in show" role="alert">
    	<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    	@if(session()->has('alert.title'))
			<h6>session()->get('alert.title')</h6>
		@endif
        {!! session()->get('alert.message') !!}
    </div>
@endif