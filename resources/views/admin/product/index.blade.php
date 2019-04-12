@extends('admin.layout.app')

@section('title',$title)

@section('content')
<style type="text/css"> .badge { padding: .325em .54em;} </style>
<div class="row">
	<div class="col-lg-12">
		<p>
			<a href="{{ url('/shopadmin/product/create') }}">
				<button type="button" class="btn btn-gradient-bloody waves-effect waves-light">Add New Product</button>
			</a>
			<a href="">
				<button type="button" class="btn btn-danger waves-effect waves-light">Delete Products</button>
			</a>
		</p>

		<div class="card">
      <div class="card-header text-uppercase">{{ $headline }}</div>
      <div class="card-body">
			<div class="table-responsive">
				<table class="table table-bordered">
					<thead>
						<tr>							
							<th width="50px"><input type="checkbox" name="checkbox" class="checkbox custom-checkbox" /></th>
							<th width="60px">SNo</th>
							<th>Title</th>
							<th>Parent</th>
							<th>Status</th>
							<th class="text-right col-md-2">Action</th>
						</tr>
					</thead>

					<tbody>
						@if (!empty($categories)) 
							@php $i = 0 @endphp
							@foreach ($categories as $row)
								@php
									$view_url = !empty($row['parent']) ? url('/'.$row['parent']['slug'].'/'.$row['slug']) : url('/'.$row['slug']);
								@endphp

								<tr>							
									<td width="50px">
										<input type="checkbox" name="checkbox[]" class="checkbox custom-checkbox" />
									</td>
									<td>{{ ++$i }}</td>
									<td>{{ $row['title'] }}</td>
									<td>@if (!empty($row['parent'])) {{ $row['parent']['title'] }} @else - @endif </td>
									<td>Active</td>
									<td class="text-right">
										<a href="{{ $view_url }}"><span class="badge badge-primary"><i class="fa fa-eye"></i> View</span></a>
										<a href="{{ url('/shopadmin/'.$row['id'].'/edit') }}"><span class="badge badge-info"><i class="fa fa-edit"></i> Edit</span></a>
										<a href="{{ url('/shopadmin/'.$row['id'].'/delete') }}"><span class="badge badge-danger"><i class="fa fa-trash"></i> Delete</span></a>
									</td>
								</tr>
							@endforeach
						@else
						<tr>
							<td colspan="15" align="center">No Record Found</td>
						</tr>
						@endif
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div> 
@endsection