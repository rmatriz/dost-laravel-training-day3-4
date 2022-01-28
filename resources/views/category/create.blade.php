@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
	        <div class="col-md-10 m-auto">
	            <div class="card">
	                <h2>
	                	<div class="card-header">Create Category</div>
	                </h2>
	                <div class="card-body">
	                    @if (session('status'))
	                        <div class="alert alert-success" role="alert">
	                            {{ session('status') }}
	                        </div>
	                    @endif

	                    <form action="{{ route('categories.save') }}" method="POST">
			                @csrf
			                <div class="mb-3">
			                    <label for="name" class="form-label">Category Name</label>
			                    <input name="name" type="text" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Category Name" value="{{ old('name') }}" />
			                    @error('name')
			                        <span class="invalid-feedback" role="alert">
			                            <strong>{{ $message }}</strong>
			                        </span>
			                    @enderror
			                </div>

			                <button class="btn btn-primary">Submit</button>
			                <a href="{{ route('categories.index') }}" class="btn btn-secondary">Cancel</a>
			            </form>
	                </div>
	            </div>
	        </div>  
	    </div>
	</div>
@endsection

