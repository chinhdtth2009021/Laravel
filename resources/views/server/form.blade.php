<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<body>
<div class="container">
    <h1 class="text-center">Create Product</h1>
    <div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Name:</label>
                    <input type="text" class="form-control" id="name" name="name">
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label>Price:</label>
                    <input type="text" class="form-control" id="price" name="price">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Thumbnail:</label>
                    <input type="text" class="form-control" id="thumbnail" name="thumbnail">
                </div>
            </div>
        </div>
        <button id="btn" class="btn btn-primary pt-4">Submit</button>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous"></script>
<script>
$(document).ready(function (){
   $('#btn').click()(function () {
       $.ajax({
           ulr:
       })
   })
});
</script>
</body>
</html>

