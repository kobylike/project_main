@extends('layout.app')

@section('content')

@include('inc.header')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                        {{ __('Dashboard') }}
                    </x-nav-link>
                    @role('admin')
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                        {{ __('Admin') }}
                    </x-nav-link>
                    @endrole
                    </div>


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


                    Welcome to User dashboard
                    {{ __('You are logged in!') }}
                    {{-- {{ Auth::guard('registered_User')->user()->name }} --}} --}}
                    @role('admin')

                    <button ><a href="{{ route('blog.create') }}">Create Post </a></button>
                    @endrole
                </div>
            </div>
        </div>
    </div>
</div>




@endsection
