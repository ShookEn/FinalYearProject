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
        margin-left:150px;
    }
    .img-fluid{
        width:250px;
        height:250px;
    }
</style>
    <div class="row">
        @foreach($flights as $flight)
        <div class="col-sm-4">
            <div class="card-body">
                <h5 class="card-title">{{$flight->name}}</h5>
                <a href="{{route('showFlightDetail',['id'=>$flight->id])}}">
                <img src="Area\Area\Cameron Highland\Cameron Lavender Farm\Picture96.jpg" alt="..." class="shown" class="img"></a>
                <div class="card-heading">RM {{$flight->price}}</div>
                <button class="btn btn-danger btn-xs">Add to Cart</button>
            </div>
        </div>
        @endforeach
    </div>
@endsection