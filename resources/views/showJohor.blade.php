@extends('layout')
@section('content')
    <div class="row">
        @foreach($johors as $johor)
        <div class="col-sm-4">
            <div class="card-body">
                <h5 class="card-title">{{$johor->name}}</h5>
                <a href="{{route('showJohorDetail',['id'=>$johor->id])}}">
                <img src="{{asset('images')}}/{{$johor->image}}" alt="" class="img-fluid"></a>
                <div class="card-heading">RM {{$johor->price}}</div>
                <button class="btn btn-danger btn-xs">Add to Cart</button>
            </div>
        </div>
        @endforeach
    </div>
@endsection