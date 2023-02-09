@extends('layout')
@section('content')
<aside class="nav-sidebar flex-column" >
<div class="menu">
    <div class="menuitem text"><a href ="{{url('http://localhost:8000/addHotel')}}"><i class="fa fa-home"></i><span>Add New Hotel</span></a></div>
    <div class="menuitem text"><a href ="{{route('viewHotel')}}"><i class="fa fa-hotel"></i><span>Hotel List</span></a></div>
   
</div>
</aside>

<style>
    aside{
        display:block;
    }
    .menu {

height:500px;
  width: 100px;
  background: #B5B5B5;
  transition:width 1s;
  overflow: hidden;
  font-family: Arial;
  font-size: 18px;
  text-transform: uppercase;
  font-weight: 400;
  padding: 0;
  display:block;
  float: left;
}
 
.menu:hover {
  width: 220px;
}
 
.menuitem span {
  position: absolute;
  left:80px;
  top:20px;
  transition:color 1s;
  color:rgba(255,255,255,0);
}
 
.menu:hover .menuitem  span {
 color:rgba(255,255,255,1);
}
 
.menuitem {
  position: relative;
  padding: 20px;
  transition:border .5s, background .2s;  
}
 
.menuitem:hover {
  background: #87B3AF;
  cursor: pointer;
}
 
 
.text:hover{
  border-left:20px solid #16a085;
}
    </style>


<div class="row">
    <div class="col-sm-2">&nbsp;</div>
    <div class="col-sm-8">
        <form action="{{route('addHotel')}}" method="post" enctype="multipart/form-data">
        @csrf
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <strong>{{ $message }}</strong>
                </div>
            @endif

            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <h3>Add New Hotel</h3>
             Name: <input name="productName" type="text" class="form-control"><br>

            Address:<input name="description" type="text" class="form-control"><br>
            Price: <input name="price" type="number" class="form-control"><br>
            Quantity: <input name="quantity" type="number" class="form-control"><br>

            Image: <input name="image" type="file" class="form-control" id="images" ><br>

           
            Category: <select name="categoryID" id="" class="form-control">
                <option value="">Select Category</option>
                <option value="1">Hotel</option>
                <option value="2">Resort</option>
            </select> <br>           
            <button type="submit" name="submit" class="btn btn-info">
                Upload Images
            </button><br><br>
        </form>
    </div>
    
</div>
@endsection