<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
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
                    <input type="text" class="form-control" id="name">
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label>Price:</label>
                    <input type="text" class="form-control" id="price">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label>Thumbnail:</label>
                    <input type="text" class="form-control" id="thumbnail">
                </div>
            </div>
        </div>
        <button id="btn" class="btn btn-primary">Submit</button>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous"></script>
<script>
    $(document).ready(function () {
        $('#btn').click()(function () {
            $.ajax({
                url: 'http://localhost:8000/api/servers',
                method: 'POST',
                dataType: 'text',
                data: {
                    name: $('#name').val(),
                    price: $('#price').val(),
                    thumbnail: $('#thumbnail').val(),
                },
                success: function (data) {
                    alert('Thêm Sản Phẩm Thành Công')
                    window.location.href = 'http://localhost:8000/'
                },
                error: function () {

                }
            })
        })
    })
</script>
</body>
</html>

