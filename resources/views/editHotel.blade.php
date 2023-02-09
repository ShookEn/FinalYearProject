@extends('layout')
@section('content')
<div class="row">
    <div class="col-sm-2">&nbsp;</div>
    <div class="col-sm-6">
        <h3>Edit Hotel</h3>
        <form action="{{route('updateHotel')}}" method="post" ><br><br> @csrf
        
            @foreach($hotels as $hotel)
            Name: <input name="hotelName" type="text" class="form-control" value="{{$hotel->name}}"><br>
            Price: <input name="price" type="text" class="form-control" value="{{$hotel->price}}"><br>
            Quantity:<input name="hotelQuantity" type="number" class="form-control" value="{{$hotel->quantity}}"><br>
            Image:<input name="hotelImage" type="file" class="form-control" value="{{$hotel->image}}"><br>
            Category:<select name="categoryID" id="" class="form-control">
                <option value="">Select Category</option>
                <option value="1">Hotel</option>
                <option value="2">Resort</option>
                <br>
            </select>
            
            @endforeach
            <button type="submit" class="btn btn-info" >Update Hotel Detail</button><br><br>
        </form>
    </div>
    <div class="col-sm-2">&nbsp;</div>
</div>
@endsection