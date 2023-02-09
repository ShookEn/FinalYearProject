@extends('layout')
@section('content')
    <div class="row">
        @foreach($gentings as $genting)
        <div class="col-sm-4">
            <div class="card-body">
                <h5 class="card-title">{{$genting->name}}</h5>
                <a href="{{route('showGentingDetail',['id'=>$genting->id])}}">
                <img src="{{asset('images')}}/{{$genting->image}}" alt="" class="img-fluid"></a>
                <div class="card-heading">RM {{$genting->price}}</div>
                <button class="btn btn-danger btn-xs">Add to Cart</button>
            </div>
        </div>
        @endforeach
    </div>
@endsection