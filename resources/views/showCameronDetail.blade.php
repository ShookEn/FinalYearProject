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
  padding: 15px;
}

body {
    
    background: linear-gradient(to right,#f64f59,#c471ed,#12c2e9);
}
</style>
    <div class="row">
        @foreach($camerons as $cameron)
        <div class="col-sm-2"></div>
        <div class="col-sm-10">
            <div class="card-body">
            <form action="{{route('addCart')}}" method="post">
                @csrf
                <input type="hidden" name="id" value="{{$cameron->id}}">
            <div class="row">
            <div class="column">
                    <h3 class="card-title">{{$cameron->name}}</h3>
                <br><br>
                    <div class="column">
                    <div class ="col-md-6">
                    <img src="{{asset('images')}}/{{$cameron->image}}" alt="" class="img-fluid" >
                    </div>
                    <div class="column">
                    <img src="{{asset('images')}}/{{$cameron->image_a}}" alt="" class="img-fluid" >
                    </div>
                    <div class="column">
                    <img src="{{asset('images')}}/{{$cameron->image_b}}" alt="" class="img-fluid" >
                    </div>
                    <div class="column">
                    <img src="{{asset('images')}}/{{$cameron->image_c}}" alt="" class="img-fluid" >
                    
                </div>
                </div>
                <br><br><br><br><br><br><br>
                <div class="col-md-9">
                    <br><br>
                    <p class="card-text">{{$cameron->description}}</p>
                    <div class="card-heading">Quantity <input type="number" name="quantity" value="1" min="1"> Available: {{$cameron->quantity}}</div>
                    <br><br>
                    <div class="card-heading">RM {{$cameron->price}}</div>
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