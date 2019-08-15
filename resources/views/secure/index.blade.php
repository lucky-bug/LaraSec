@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Secure') }}</div>

                    <div class="card-body">
                        Welcome to secure controller.
                        <div>
                            <a href="{{ route('secure.index') }}">{{ __('Home') }}</a>
                            <a href="{{ route('secure.sqli', rand(1, 100)) }}">{{ __('SQLi') }}</a>
                            <a href="{{ route('secure.index') }}">{{ __('Home') }}</a>
                            <a href="{{ route('secure.index') }}">{{ __('Home') }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
