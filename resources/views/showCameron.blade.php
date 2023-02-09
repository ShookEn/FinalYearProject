@extends('layout')
@section('content')
<style>
   .card-heading{
    font-size:50px;
   }
    
    .body{
        background: linear-gradient(to right,#f64f59,#c471ed,#12c2e9);
    }
    .card-body{
        margin-left:200px;
    }
    .img-fluid{
        width:250px;
        height:250px;
    }
</style>
    <div class="row">
        @foreach($camerons as $cameron)
        <div class="col-sm-3">
            <div class="card-body">
                <h5 class="card-title">{{$cameron->name}}</h5>
                <a href="{{route('showCameronDetail',['id'=>$cameron->id])}}">
                <img src="{{asset('images')}}/{{$cameron->image}}" alt="" class="img-fluid"></a><br><br>
                <div class="card-heading">RM {{$cameron->price}}</div><br>
                <button class="btn btn-danger btn-xs">Add to Cart</button>
            </div>
        </div>
        @endforeach
    </div>
@endsection