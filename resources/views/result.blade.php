@extends('layout')
@section('content')

<div class="container">
    <h1 class="page-header text-center">Laravel Query Between 2 Dates</h1>
    <div class="row">
  
        <div class="col-md-8 col-md-offset-2">
            <h2>Results
                <a href="/" class="btn btn-primary pull-right">Back</a>
            </h2>
            @if(count($posts)>0)
                <table class="table table-bordered table-striped">
                    <thead>
                        <th>Post Date</th>
                        <th>Post</th>
                    </thead>
                    <tbody>
                        @foreach($posts as $post)
                            <tr>
                                <td>{{ date('M d, Y h:i A', strtotime($post->created_at)) }}</td>
                                <td>{{ $post->post }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <h3 class="text-center">No Post from Selected Range</h3>
            @endif
        </div>
    </div>
</div>
@endsection