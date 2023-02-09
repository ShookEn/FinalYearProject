@extends('layout')
@section('content')
<style>

</style>
    <div class="row">
        @foreach($johors as $johor)
        <div class="col-sm-2"></div>
        <div class="col-sm-10">
            <div class="card-body">
            <form action="{{route('addCart')}}" method="post">
                @csrf
                <input type="hidden" name="id" value="{{$johor->id}}">
                <h3 class="card-title">{{$johor->name}}</h3>
            <div class="row">
           
                <div class="column">
                    
                    <img src="{{asset('images')}}/{{$johor->image}}" alt="" class="img-fluid" >
                    </div>
                    <div class="column">
                    <img src="{{asset('images')}}/{{$johor->image_a}}" alt="" class="img-fluid" >
                    </div>
                    <div class="column">
                    <img src="{{asset('images')}}/{{$johor->image_b}}" alt="" class="img-fluid" >
                    </div>
                    <div class="column">
                    <img src="{{asset('images')}}/{{$johor->image_c}}" alt="" class="img-fluid" >
                    
                </div>
                <br><br>
                <div class="col-md-9">
                    <br><br>
                    <p class="card-text">{{$johor->description}}</p>
                    <div class="card-heading">Quantity <input type="number" name="quantity" value="1" min="1"> Available: {{$johor->quantity}}</div>
                    <br><br>
                    <div class="card-heading">RM {{$johor->price}}</div>
                    <br><br>
                    
                {{ csrf_field() }}
                <div class="mb-3">
                    <label>First Date:</label>
                    <input type="date" class="form-control" name="fdate">
                </div>
                <div class="mb-3">
                    <label>Second Date:</label>
                    <input type="date" class="form-control" name="sdate">
                </div>
                    <button class="btn btn-danger btn-xs" type="submit">Add to Cart</button>
                </div>
                
            </form>
            </div>                
            </div>
        </div>
        @endforeach
    </div>
@endsection