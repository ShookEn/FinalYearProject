@extends('layout')
@section('content')
    <div class="row">
        @foreach($penangs as $penang)
        <div class="col-sm-4">
            <div class="card-body">
                <h5 class="card-title">{{$penang->name}}</h5>
                <a href="{{route('showPenangDetail',['id'=>$genting->id])}}">
                <img src="{{asset('images')}}/{{$penang->image}}" alt="" class="img-fluid"></a>
                <div class="card-heading">RM {{$penang->price}}</div>
                <button class="btn btn-danger btn-xs">Add to Cart</button>
            </div>
        </div>
        @endforeach
    </div>
@endsection