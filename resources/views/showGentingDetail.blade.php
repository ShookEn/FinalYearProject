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
body {
    
    background: linear-gradient(to right,#f64f59,#c471ed,#12c2e9);
}


</style>
    <div class="row">
        @foreach($gentings as $genting)
        <div class="col-sm-2"></div>
        <div class="col-sm-10">
            <div class="card-body">
            <form action="{{route('addCart')}}" method="post">
                @csrf
                <input type="hidden" name="id" value="{{$genting->id}}">
                <h3 class="card-title">{{$genting->name}}</h3>
            <div class="row">
           
                <div class="column">
                    
                    <img src="{{asset('images')}}/{{$genting->image}}" alt="" class="img-fluid" >
                    </div>
                    <div class="column">
                    <img src="{{asset('images')}}/{{$genting->image_a}}" alt="" class="img-fluid" >
                    </div>
                    <div class="column">
                    <img src="{{asset('images')}}/{{$genting->image_b}}" alt="" class="img-fluid" >
                    </div>
                    <div class="column">
                    <img src="{{asset('images')}}/{{$genting->image_c}}" alt="" class="img-fluid" >
                    
                </div>
                <br><br>
                <div class="col-md-9">
                    <br><br>
                    <p class="card-text">{{$genting->description}}</p>
                    <div class="card-heading">Quantity <input type="number" name="quantity" value="1" min="1"> Available: {{$genting->quantity}}</div>
                    <br><br>
                    <div class="card-heading">RM {{$genting->price}}</div>
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