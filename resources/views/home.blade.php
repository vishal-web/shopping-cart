@extends('layout.app')

@section('content')
<div class="row">
	<div class="left-side-wrapper">		
		@include('common.sidebar-nav')
	</div>

	{{-- <div class="right-side-wrapper">
		
			<div class="col-md-9">
				<h3>HomePage Banner</h3>
				<div class="banner">

				</div>
			</div>
			<div class="col-md-9">
				<h3>Books Categories</h3>
				<div class="category-box">

					@for ($i = 0; $i < 5; $i++)
					    <div class="box">
					    	<div class="box-img-wrapper"></div>
					    	<div class="box-title">
					    		Books Title Name
					    	</div>
					    </div>
					@endfor 
					 
				</div>
			</div>
	</div> --}}
</div>
@endsection