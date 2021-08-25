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
<h1>Create Product</h1>
<div class="container">
    <h2>Stacked form</h2>
    <form action="" method="post">
        @csrf
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label>Name:</label>
                    <input type="text" class="form-control" placeholder="Name" name="name">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label>Phone:</label>
                    <input type="number" class="form-control" placeholder="Phone" name="phone">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label>Age:</label>
                    <input type="number" class="form-control" placeholder="Age" name="age">
                </div>
            </div>
        </div>
        <div class="form-group">
            <label>Address:</label>
            <input type="text" class="form-control" placeholder="Address" name="address">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

</body>
</html>
