@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
	        <div class="col-md-10 m-auto">
	            <div class="card">
	                <h2>
	                	<div class="card-header">{{ $product['name'] }}</div>
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
						      <th width="10%" scope="col">Name</th>
						    </tr>
						  </thead>
						  @foreach ($categories as $category)
						  <tbody>
						    <tr>
						      <th scope="row">{{ $category['id'] }}</th>
						      <td>{{ $category['name'] }}</td>
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

