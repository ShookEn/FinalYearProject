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
    <div class="col-sm-6">
        <br><br>
        <table class="table table-bordered";border-collapse="collapse";width="100%";border="1px solid #c6c6c6 !important";margin-bottom="20px">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Hotel Name</td>
                    <td>Quantity</td>
                    <td>Price</td>
                    
                    <td>Action</td>
                </tr>
            </thead>
            <tbody>
                @foreach($hotels as $hotel)
                <tr>
                    <td>{{$hotel->id}}</td>
                    <td>{{$hotel->name}}</td>
                    <td>{{$hotel->quantity}}</td>
                    <td>RM {{$hotel->price}}</td>
                    
                    <td><a href="{{route('deleteHotel',['id'=>$hotel->id])}}" class="btn btn-danger btn-xs" onClick="return confirm('Are you sure to delete?')">Delete</a>&nbsp;
                    <a href="{{route('editHotel',['id'=>$hotel->id])}}" class="btn btn-info btn-xs" >Edit</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="col-sm-2">&nbsp;</div>
</div>


@endsection