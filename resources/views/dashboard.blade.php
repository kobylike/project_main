@extends('layout.app')

@section('content')

@include('inc.header')
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

                    @if (Session::has('error'))
                    <div class="alert alert-success" role="alert">
                        {{ session('error') }}
                    </div>
                    @endif
                        Welcome to user dashboard
                    {{ __('You are logged in!') }}

                    <button ><a href="{{ route('blog.create') }}">Create Post </a></button>
                </div>
            </div>
        </div>
    </div>
</div>




@endsection
