@extends('layout')
@section('content')
<div class="row">
    <div class="col-sm-2">&nbsp;</div>
    <div class="col-sm-8">
        <form action="{{route('addJohor')}}" method="post" enctype="multipart/form-data"><br><br>
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
            <h3>Add New Johor Hotel</h3>
            Name: <input name="productName" type="text" class="form-control"><br>
            
            Description:<input name="description" type="text" class="form-control"><br>
            Price: <input name="price" type="number" class="form-control"><br>
            Quantity: <input name="quantity" type="number" class="form-control"><br>

            Image: <input name="image" type="file" class="form-control" id="images" multiple="multiple"><br>

            Image: <input name="image_a" type="file" class="form-control" id="images" multiple="multiple"><br>

            Image: <input name="image_b" type="file" class="form-control" id="images" multiple="multiple"><br>

            Image: <input name="image_c" type="file" class="form-control" id="images" multiple="multiple"><br>
                
            Category: <select name="categoryID" id="" class="form-control">
                <option value="">Select Category</option>
                <option value="1">Hotel</option>
                <option value="2">Resort</option>
            </select> <br>           
            <button type="submit" name="submit" class="btn btn-info">
                Submit
            </button><br><br>
        </form>
    </div>
    
</div>
@endsection