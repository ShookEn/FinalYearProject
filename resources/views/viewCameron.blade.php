@extends('layout')
@section('content')
<div class="row">
    <div class="col-sm-2">&nbsp;</div>
    <div class="col-sm-8">
        <br><br>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Product Name</td>
                    <td>Quantity</td>
                    <td>Price</td>
                    <td>Category</td>
                    <td>Action</td>
                </tr>
            </thead>
            <tbody>
                @foreach($camerons as $cameron)
                <tr>
                    <td>{{$cameron->id}}</td>
                    <td>{{$cameron->name}}</td>
                    <td>{{$cameron->quantity}}</td>
                    <td>{{$cameron->price}}</td>
                    <td></td>
                    <td><a href="{{route('deleteCameron',['id'=>$cameron->id])}}" class="btn btn-danger btn-xs" onClick="return confirm('Are you sure to delete?')">Delete</a>&nbsp;
                    <a href="" class="btn btn-info btn-xs" >Edit</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="col-sm-2">&nbsp;</div>
</div>
@endsection