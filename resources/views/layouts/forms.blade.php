<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <title>Add Product</title>
    <style>body {
            background: url({{asset('images/background.jpg')}});
            color: white
        }
    </style>
</head>
<body>
@if(Request::url() == 'http://social.my/products/create')
    @include('createForm.productForm')
@endif
</body>
</html>