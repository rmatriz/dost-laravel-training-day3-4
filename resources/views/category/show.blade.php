@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
	        <div class="col-md-10 m-auto">
	            <div class="card">
	                <h2>
	                	<div class="card-header">{{ $category['name'] }}</div>
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
						      <th width="5%" scope="col">#</th>
						      <th width="15%" scope="col">Category ID</th>
						      <th width="10%" scope="col">Name</th>
						      <th width="10%" scope="col">Description</th>
						      <th width="10%" scope="col">Quantity</th>
						      <th width="10%" scope="col">Price</th>
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

