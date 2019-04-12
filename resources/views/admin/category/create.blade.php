@extends('admin.layout.app')

@section('title',$title)

@section('content')
<div class="row">
	<div class="col-lg-12">
		{{-- <p>
			<a href="{{ url('/shopadmin/category/create') }}">
				<button type="button" class="btn btn-gradient-bloody waves-effect waves-light">Add New Category</button>
			</a>
			<a href="">
				<button type="button" class="btn btn-danger waves-effect waves-light">Delete Categories</button>
			</a>
		</p> --}}

		@if (Session::get('status') == 'error')
			<div class="alert alert-danger alert-dismissible" role="alert">
		    <button type="button" class="close" data-dismiss="alert">×</button>
		    <div class="alert-icon">
			 <i class="icon-close"></i>
		    </div>
		    <div class="alert-message">
		      <span> {{ Session::get('message') }}</span>
		    </div>
			</div>
		@endif

		@if (Session::get('status') == 'success')
			<div class="alert alert-success alert-dismissible" role="alert">
		    <button type="button" class="close" data-dismiss="alert">×</button>
		    <div class="alert-icon">
			 <i class="icon-check"></i>
		    </div>
		    <div class="alert-message">
		      <span> {{ Session::get('message') }}</span>
		    </div>
			</div>
		@endif
		
		<div class="card">
			<div class="card-header text-uppercase">{{ $headline }}</div>
      <div class="card-body">
        <form action="{{ URL::current() }}" method="post" class="form-horizontal">
        	{{ csrf_field() }}
        	<div class="form-group row">
        	  <label for="input-6" class="col-sm-2 col-form-label">Parent Category</label>
        	  <div class="col-sm-9">
        	    <select class="form-control" name="parent_id" id="input-6">
      	        <option value=""> --- Choose Parent Category --- </option>
      	        @if (!empty($parent_categories))
      	        	@foreach ($parent_categories as $row)
      	        		<option value="{{ $row['id'] }}">{{ $row['title'] }}</option>
      	        	@endforeach
      	        @endif
        	    </select>
        	  </div>
        	</div>

          <div class="form-group row">
            <label for="input-1" class="col-sm-2 col-form-label">Category Title</label>
            <div class="col-sm-9">
              <input type="text" name="title" class="form-control" id="input-1" value="">

              @if ($errors->has('title'))
              	<p class="text-danger">{{ $errors->first('title') }}</p>
              @endif


            </div>
          </div> 
          <div class="row">
	          <div class="form-group offset-md-2 col-md-10">
	            <button type="submit" name="submit" value="Submit" class="btn btn-success">Submit</button>
	            <button type="submit" name="submit" value="Cancel" class="btn btn-danger">Cancel</button>
	        	</div>
	        </div>
        </form>
      </div>
    </div>
	</div>
</div> 
@endsection