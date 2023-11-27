@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>

            <div class="card" style="width: 18rem;">
                <div class="card-body">
                  <h5 class="card-title">Hossam Gamed Moot</h5>
                  <h6 class="card-subtitle mb-2 text-body-secondary">Develop some trust</h6>
                  <p class="card-text">bla bla</p>
                  <a href="#" class="card-link">Card link</a>
                  <a href="#" class="card-link">Another link</a>
                </div>
              </div>
        </div>
    </div>
</div>
@endsection
