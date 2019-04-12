@extends('admin.layout.app')

@section('title',$title)

@section('content')
<style type="text/css">
	form p.text-danger { margin-bottom: 0px;  }
</style>
<div class="row">
	<div class="col-lg-12">
		{{-- <p>
			<a href="{{ url('/shopadmin/product/create') }}">
				<button type="button" class="btn btn-gradient-bloody waves-effect waves-light">Add New Product</button>
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
            <label for="input-1" class="col-sm-2 col-form-label">Product Title</label>
            <div class="col-sm-9">
              <input type="text" name="title" class="form-control" id="input-1"  value="{{ old('title') }}">

              @if ($errors->has('title'))
              	<p class="text-danger">{{ ucfirst(str_replace(['The ','field '], '', $errors->first('title'))) }}</p>
              @endif 
            </div>
          </div> 

          <div class="form-group row">
            <label for="input-1" class="col-sm-2 col-form-label">Price</label>
            <div class="col-sm-3">
              <input type="text" name="price" class="form-control" id="input-1"  value="{{ old('price') }}">

              @if ($errors->has('price'))
              	<p class="text-danger">{{ ucfirst(str_replace(['The ','field '], '', $errors->first('price'))) }}</p>
              @endif 
            </div>
          </div> 

          <div class="form-group row">
            <label for="input-1" class="col-sm-2 col-form-label">Was Price</label>
            <div class="col-sm-3">
              <input type="text" name="was_price" class="form-control" id="input-1"  value="{{ old('was_price') }}">

              @if ($errors->has('was_price'))
              	<p class="text-danger">{{ ucfirst(str_replace(['The ','field '], '', $errors->first('was_price'))) }}</p>
              @endif 
            </div>
          </div> 

          <div class="form-group row">
            <label for="input-1" class="col-sm-2 col-form-label">Quantity</label>
            <div class="col-sm-3">
              <input type="text" name="quantity" class="form-control" id="input-1"  value="{{ old('quantity') }}">

              @if ($errors->has('quantity'))
              	<p class="text-danger">{{ ucfirst(str_replace(['The ','field '], '', $errors->first('quantity'))) }}</p>
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