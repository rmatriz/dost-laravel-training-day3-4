@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-10 m-auto p-3">
				<h1 class="display-4s">Categories/Products</h1>
			</div>
		</div>
		@foreach ($categories as $category)
		<div class="col-md-10 m-auto ">
			<div class="accordion" id="accordionExample">
			  <div class="accordion-item">
			    <h1 class="accordion-header" id="headingOne">
			      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
			        <strong>{{ $category->name}}</strong>
			      </button>
			    </h1>
			    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
			      <div class="accordion-body">
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
					  @foreach ($category->products as $product)
					  <tbody>
					    <tr>
					      <th scope="row">{{ $product->id }}</th>
					      <td>{{ $product->category_id }}</td>
					      <td>{{ $product->name }}</td>
					      <td>{{ $product->description }}</td>
					      <td>{{ $product->quantity }}</td>
					      <td>{{ $product->price }}</td>
					    </tr>
					  </tbody>
					  @endforeach
					</table>
			      </div>
			    </div>
			  </div>
			</div>
		</div><br>
		@endforeach
	</div>
@endsection


