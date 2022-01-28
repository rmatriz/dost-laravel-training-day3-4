@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-10 m-auto p-3">
				<h1 class="display-4s">Products/Categories</h1>
			</div>
		</div>
		@foreach ($products as $product)
		<div class="col-md-10 m-auto ">
			<div class="accordion" id="accordionExample">
			  <div class="accordion-item">
			    <h1 class="accordion-header" id="headingOne">
			      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
			        <strong>{{ $product->name}}</strong>
			      </button>
			    </h1>
			    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
			      <div class="accordion-body">
			        <table class="table table-hover">
					  <thead>
					    <tr>
					      <th width="5%" scope="col">#</th>
					      <th width="10%" scope="col">Name</th>
					    </tr>
					  </thead>
					  <tbody>
					    <tr>
					      <th scope="row">{{ $product->category->id }}</th>
					      <td>{{ $product->category->name }}</td>
					    </tr>
					  </tbody>
					</table>
			      </div>
			    </div>
			  </div>
			</div>
		</div><br>
		@endforeach
	</div>
@endsection


