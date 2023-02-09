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
                @foreach($johors as $johor)
                <tr>
                    <td>{{$johor->id}}</td>
                    <td>{{$johor->name}}</td>
                    <td>{{$johor->quantity}}</td>
                    <td>{{$johor->price}}</td>
                    <td></td>
                    <td><a href="{{route('deleteJohor',['id'=>$johor->id])}}" class="btn btn-danger btn-xs" onClick="return confirm('Are you sure to delete?')">Delete</a>&nbsp;
                    <a href="" class="btn btn-info btn-xs" >Edit</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="col-sm-2">&nbsp;</div>
</div>
@endsection