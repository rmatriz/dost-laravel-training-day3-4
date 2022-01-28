@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
	        <div class="col-md-10 m-auto">
	        	@if (strlen($msg) > 0)
					<div class="alert alert-info alert-dismissible fade show" role="alert">
					  	{{ $msg }}
						<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
					</div>
				@endif
	            <div class="card">
	                <h2>
	                	<div class="card-header">
	                		<div class="row">
	                			<div class="col-md-9">{{ __('Categories') }}</div>
	                			<div class="col-md-3">
	                				
	                				<a class="btn btn-success btn-sm row-edit-btn float-end" href="{{ route('categories.showProducts') }}" title="Show ">Show Products</a>
	                				<a class="btn btn-primary btn-sm row-edit-btn float-end " style="margin-right: 4px" href="{{ route('categories.create') }}" title="Show ">Create</a>
	                			</div>

	                		</div>
	                	</div>
	                </h2>
	                <div class="card-body">
	                    <table class="table table-hover">
						  <thead>
						    <tr>
						      <th width="15%" scope="col">#</th>
						      <th width="50%" scope="col">Name</th>
						      <th width="5%" scope="col">Action</th>
						    </tr>
						  </thead>
						  @foreach ($categories as $category)
						  <tbody>
						    <tr>
						      <th scope="row">{{ $category['id'] }}</th>
						      <td>{{ $category['name'] }}</td>
						      <td>
					      		<div class="btn-toolbar" role="toolbar">
									<div class="btn-group btn-group-xs" role="group">
										
										<a class="btn btn-primary btn-sm row-edit-btn" href="{{ route('categories.show', [ 'id' => $category->id ]) }}" title="Show ">Show</a>
										<a class="btn btn-warning btn-sm row-edit-btn" href="{{ route('categories.edit', [ 'id' => $category->id ]) }}" title="Show ">Edit</a>
										<a class="btn btn-danger btn-sm row-edit-btn" href="{{ route('categories.delete', ['id' => $category->id]) }}" title="Show ">Delete</a>
									</div>
								</div>
						      </td>
						    </tr>
						  </tbody>
						  @endforeach
						</table>
	                </div>
	            </div>
	        </div>  
	    </div>
	</div>
@endsection

