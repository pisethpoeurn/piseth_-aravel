<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6">
                <div class="card">
                    <div class="card-header">Edit Post</div>
                    <div class="card-body">
                            <form action="#" method="POST">
                                    @method('put')
                                    @csrf
                                <input type="text" name="title" value="{{$posts->title}}">
                                <input type="email" name="body" value="{{$posts->body}}">
                                <button class="btn btn-success">Update</button>
                            </form>
                    </div>
                </div>
            </div>
            <div class="col-3"></div>
        </div>
    </div>
</body>
</html>