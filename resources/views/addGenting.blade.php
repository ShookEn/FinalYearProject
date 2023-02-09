@extends('layout')
@section('content')

<div class="row">
    <div class="col-sm-2">&nbsp;</div>
    <div class="col-sm-8">
        <form action="{{route('addGenting')}}" method="post" enctype="multipart/form-data"><br><br>
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
            <h3>Add New Genting Hotel</h3>
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
                Upload Images
            </button><br><br>
        </form>
    </div>
    <div class="col-sm-2">&nbsp;</div>
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script>
        $(function() {
        // Multiple images preview with JavaScript
        var multiImgPreview = function(input, imgPreviewPlaceholder) {

            if (input.files) {
                var filesAmount = input.files.length;

                for (i = 0; i < filesAmount; i++) {
                    var reader = new FileReader();

                    reader.onload = function(event) {
                        $($.parseHTML('<img>')).attr('src', event.target.result).appendTo(imgPreviewPlaceholder);
                    }

                    reader.readAsDataURL(input.files[i]);
                }
            }

        };

        $('#images').on('change', function() {
            multiImgPreview(this, 'div.imgPreview');
        });
        });    
    </script>
</div>
@endsection