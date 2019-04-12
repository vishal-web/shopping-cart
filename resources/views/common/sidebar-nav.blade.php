<div class="col-md-3">
	<h3>Books Categories</h3>
	@if (isset($categories) && !empty($categories))
		<ul class="parent-category">
		@foreach ($categories as $cat_row)
			<a href="{{ url('/'.$cat_row['slug']) }}"><li>{{ $cat_row['title'] }}</li></a>
			@if (isset($cat_row['children']) && !empty($cat_row['children']))
				<ul class="child-category">
				@foreach ($cat_row['children'] as $child_cat_row)
					<a href="{{ url('/'.$cat_row['slug'].'/'.$child_cat_row['slug']) }}"><li>{{ $child_cat_row['title'] }}</li></a>
				@endforeach
				</ul>
			@endif
		@endforeach
		</ul>
	@endif
</div>