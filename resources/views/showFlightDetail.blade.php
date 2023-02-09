@extends('layout')
@section('content')

<style>
    h3 {
        text-align: center;
    }
    .img-fluid{
        float: left;
  width: 200px;
  height:200px;
  padding: 5px;
}
.row::after {
  content: "";
  clear: both;
  display: table;
}
body {
    
    background: linear-gradient(to right,#f64f59,#c471ed,#12c2e9);
}


</style>
    <div class="row">
        @foreach($flights as $flight)
        <div class="col-sm-2"></div>
        <div class="col-sm-10">
            <div class="card-body">
            <form action="{{ route('add.to.cart', $flight->id)}}" method="post">
                @csrf
                <input type="hidden" name="id" value="{{$flight->id}}">
                <h3 class="card-title">{{$flight->name}}</h3>
            <div class="row">
           
                <div class="column">
                    
                    <img src="{{asset('images')}}/{{$flight->image}}" alt="" class="img-fluid" >
                    </div>
                    <div class="column">
                    <img src="{{asset('images')}}/{{$flight->image_a}}" alt="" class="img-fluid" >
                    </div>
                    <div class="column">
                    <img src="{{asset('images')}}/{{$flight->image_b}}" alt="" class="img-fluid" >
                    </div>
                    <div class="column">
                    <img src="{{asset('images')}}/{{$flight->image_c}}" alt="" class="img-fluid" >
                    
                </div>
                <br><br>
                <div class="col-md-9">
                    <br><br>
                    <p class="card-text">{{$flight->description}}</p>
                    <div class="card-heading">Quantity <input type="number" name="quantity" value="1" min="1"> Available: {{$flight->quantity}}</div>
                    <br><br>
                    <div class="card-heading">RM {{$flight->price}}</div>
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
                <p class="btn-holder"><a href="{{ route('add.to.cart', $flight->id) }}" class="btn btn-warning btn-block text-center" role="button">Add to cart</a> </p>
                </div>
                
            </form>
            </div>                
            </div>
        </div>
        @endforeach
    </div>
@endsection