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
	                			<div class="col-md-9">{{ __('Products') }}</div>
	                			<div class="col-md-3">
	                				<a class="btn btn-success btn-sm row-edit-btn float-end" href="{{ route('products.showCategory') }}" title="Show ">Show Category</a>
	                				<a class="btn btn-primary btn-sm row-edit-btn float-end " style="margin-right: 4px" href="{{ route('products.create') }}" title="Show ">Create</a>
	                			</div>
	                		</div>
	                	</div>
	                </h2>
	                <div class="card-body">
	                    @if (session('status'))
	                        <div class="alert alert-success" role="alert">
	                            {{ session('status') }}
	                        </div>
	                    @endif

	                    <table class="table table-hover">
						  <thead>
						    <tr>
						      <th  scope="col">#</th>
						      <th  scope="col">Category ID</th>
						      <th  scope="col">Name</th>
						      <th  scope="col">Description</th>
						      <th  scope="col">Quantity</th>
						      <th  scope="col">Price</th>
						      <th  scope="col">Action</th>
						    </tr>
						  </thead>
						  @foreach ($products as $product)
						  <tbody>
						    <tr>
						      <th scope="row">{{ $product['id'] }}</th>
						      <td>{{ $product['category_id'] }}</td>
						      <td>{{ $product['name'] }}</td>
						      <td>{{ $product['description'] }}</td>
						      <td>{{ $product['quantity'] }}</td>
						      <td>{{ $product['price'] }}</td>
						      <td>
					      		<div class="btn-toolbar" role="toolbar">
									<div class="btn-group btn-group-xs" role="group">

										<a class="btn btn-primary btn-sm row-edit-btn" href="{{ route('products.show', [ 'id' => $product->id ]) }}" title="Show ">Show</a>
										<a class="btn btn-warning btn-sm row-edit-btn" href="{{ route('products.edit', [ 'id' => $product->id ]) }}" title="Show ">Edit</a>
										<a class="btn btn-danger btn-sm row-edit-btn" href="{{ route('products.delete', ['id' => $product->id]) }}" title="Show ">Delete</a>
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

