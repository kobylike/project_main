
<!------ Include the above in your HEAD tag ---------->
@extends('layout.app')

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.1/css/all.css" crossorigin="anonymous">

@section('content')

 @include('inc.header')


<main style="margin-top: 58px">
    <div class="container pt-4">
<br>
        <div>
            <h2>CATEGORY LIST</h2>
        </div>

        <table class="table table-striped">
            <thead>
              <tr>
                <th >Name</th>
                <th >Action</th>
                <th >Created At</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category )

              <tr>
                <td>{{ $category->name }}</td>

                <td><button  type="button"><a href="{{ route('category.edit', $category) }}"><i class="fa fa-edit"></i></a></button> |
                    <button  type="button"><a href="{{ route('category.delete', $category) }}"><i class="fa fa-trash" aria-hidden="true"></i></a></button></td>
                        <td>{{ $category->created_at->diffForHumans() }}</td>



              </tr>
              @endforeach
            </tbody>
          </table>
</div>
</main>
@endsection

