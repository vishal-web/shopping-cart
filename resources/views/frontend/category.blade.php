@extends('layout.app')

@section('content')
	<div class="row">
		<div class="col-md-3">
			@if (isset($categories)) 
			<h3>Books Categories</h3>
				<ul class="parent-category">
				@foreach ($categories as $category)
					<a href="{{ url('/'.$category['slug']) }}"><li class="">{{ $category['title'] }}</li></a> 
					@if (!empty($category['children']))
						<ul class="child-category">
						@foreach ($category['children'] as $children)
							<a href="{{ url('/'.$category['slug'].'/'.$children['slug']) }}"><li class="">{{ $children['title'] }}</li></a> 
						@endforeach
						</ul>
					@endif
				@endforeach
				</ul>
			@endif
		</div>
	</div>
@endsection