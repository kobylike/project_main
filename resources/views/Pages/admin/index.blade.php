{@extends('layout.app')
<link rel="stylesheet" href="{{ asset('assets/style.css') }}" />
@section('content')

@include('inc.header')



<link rel="stylesheet" href="{{ asset('assets/style.css') }}" />

<div id="wrapper">
    <!-- sidebar -->
    @include('inc.sidenav')
    </div>
    <!-- Menu Button -->
    <div class="menuButton">
      <div class="bar"></div>
      <div class="bar"></div>
      <div class="bar"></div>
    </div>


    <!-- main -->
    <main class="container">

        <button ><a href="{{ route('admin blog.create') }}">Create Post </a></button>
      <!-- Main footer -->

    </main>
  </div>






