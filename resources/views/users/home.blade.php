@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <div class="card" style="width: 18rem;">
              <img src="storage/avatars/{{ Auth::user()->avatar }}" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</h5>
                <p class="card-text">{{ Auth::user()->bio }}</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
        </div>
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{-- <h1 class="display-4">Welcome {{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</h1> --}}
                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>  
    </div>
</div>
@endsection
