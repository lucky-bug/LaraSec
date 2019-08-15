@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Secure Validation') }}</div>

                    <div class="card-body">
                        <ul>
                            @if($errors)
                                @foreach($errors->all() as $error)
                                    <li>
                                        {{ $error }}
                                    </li>
                                @endforeach
                            @endif
                        </ul>

                        <form action="{{ route('secure.validation') }}" method="post">
                            {{ csrf_field() }}

                            <div class="form-group">
                                <input type="text" name="title" class="form-control" placeholder="Title"/>
                            </div>

                            <div class="form-group">
                                <textarea name="body" class="form-control" placeholder="Body"></textarea>
                            </div>

                            <div class="form-group text-right">
                                <input type="submit" class="btn btn-primary" value="Save"/>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
