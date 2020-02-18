<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/app.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center">This is the data of comments</h1>
                <a href="comments/create"><button class="btn btn-success">Add New</button></a>
                <table class="table table-bordered table-hover table-">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Comments</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    @foreach ($comments as $comment)
                        <tbody>
                            <tr>
                            <td>{{$comment->id}}</td>
                            <td>{{$comment->comments}}</td>
                            <td>
                                <a href="{{route('comments.edit',$comment->id)}}"><button class="btn btn-info">edit</button></a>
                                <form action="{{route('comments.destroy',$comment->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                 <button class="btn btn-danger" onclick="return confirm('Are you sure to delete.. ?')">delete</button></a>
                                </form>
                            </td>
                            </tr>
                        </tbody>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</body>
</html>

