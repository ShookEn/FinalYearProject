@extends('layout')
@section('content')
<style>
    .img-fluid{
        float: left;
        width: 250px;
        height:200px;
        padding: 5px;
        }
        .row::after {
        content: "";
        clear: both;
        display: table;
        }
        


</style>
    <div class="row">
        @foreach($hotels as $hotel)
        <div class="col-sm-2"></div>
        <div class="col-sm-10">
            <div class="card-body">
            <form action="{{ route('add.to.cart', $hotel->id)}}" method="post">
                @csrf
                <input type="hidden" name="id" value="{{$hotel->id}}">
                <h3 class="card-title">{{$hotel->name}}</h3>
            <div class="row">
           
                <div class="column">
                    
                    <img src="{{asset('images')}}/{{$hotel->image}}" alt="" class="img-fluid" >
                    </div>
                    
                <br><br>
                <div class="col-md-9">
                    
                    <p class="card-text" style="color:black;">{{$hotel->description}}</p>
                    <div class="card-heading">Quantity <input type="number" name="quantity" value="1" min="1"> Available: {{$hotel->quantity}}</div>
                    <br><br>
                    <div class="card-heading">RM {{$hotel->price}}</div>
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
                <p class="btn-holder"><a href="{{ route('add.to.cart', $hotel->id) }}" class="btn btn-warning btn-block text-center" role="button">Add to cart</a> </p>
                </div>
                
            </form>
            </div>                
            </div>
        </div>
        @endforeach
    </div>
@endsection