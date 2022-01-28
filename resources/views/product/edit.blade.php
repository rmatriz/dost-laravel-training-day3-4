@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
	        <div class="col-md-10 m-auto">
	            <div class="card">
	                <h2>
	                	<div class="card-header">Edit Product</div>
	                </h2>
	                <div class="card-body">
	                    @if (session('status'))
	                        <div class="alert alert-success" role="alert">
	                            {{ session('status') }}
	                        </div>
	                    @endif

	                    <form action="{{ route('products.update',  ['id' => $product->id]) }}" method="POST">
			                @csrf

			                <div class="mb-3">
			                    <label for="category_id" class="form-label">Product Category</label>
			                    
			                    <select name="category_id" type="text" class="form-select @error('category_id') is-invalid @enderror" id="category_id"  value="category_id"> 
			                    	<option value="0" disabled selected>Select Product Category</option>
			                    	@foreach($categories as $category)
			                    		<option value="{{ old('category_id', $category->id )}}" {{ $category->id == $product->category_id ? 'selected' : ''}}>{{ $category->name }}</option>
			                    	@endforeach
			                    </select>
			                    @error('category_id')
			                        <span class="invalid-feedback" role="alert">
			                            <strong>{{ $message }}</strong>
			                        </span>
			                    @enderror
			                </div>
			                <div class="mb-3">
			                    <label for="name" class="form-label">Product Name</label>
			                    <input name="name" type="text" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Category Name" value="{{ old('name', $product->name) }}" />
			                    @error('name')
			                        <span class="invalid-feedback" role="alert">
			                            <strong>{{ $message }}</strong>
			                        </span>
			                    @enderror
			                </div>
			             
			                <div class="mb-3">
			                    <label for="description" class="form-label">Description</label>
			                    <textarea placeholder="Description" name="description" class="form-control @error('description') is-invalid @enderror" id="description" rows="3">{{ old('description', $product->description) }}</textarea>
			                    @error('description')
			                        <span class="invalid-feedback" role="alert">
			                            <strong>{{ $message }}</strong>
			                        </span>
			                    @enderror
			                </div>
			                <div class="mb-3">
								<label class="form-label" for="quantity">Quantity</label>
								<input placeholder="Quantity" class="form-control @error('quantity') is-invalid @enderror" type="number" name="quantity" id="quantity" value="{{ old('quantity', $product->quantity) }}">
								<div class="invalid-feedback">@error('quantity') {{ $errors->first('quantity') }} @enderror</div>
							</div>
							<div class="mb-3">
								<label class="form-label" for="price">Price</label>
								<input placeholder="Price" class="form-control @error('price') is-invalid @enderror" type="number" name="price" id="price" value="{{ old('price', $product->price) }}">
								<div class="invalid-feedback">@error('price') {{ $errors->first('price') }} @enderror</div>
							</div>
			         		<div class="mb-3">
			         			<button class="btn btn-primary">Submit</button>
			                	<a href="{{ route('products.index') }}" class="btn btn-secondary">Cancel</a>
			         		</div>
			                
			            </form>
	                </div>
	            </div>
	        </div>  
	    </div>
	</div>
@endsection

