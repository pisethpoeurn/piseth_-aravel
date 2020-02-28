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
    <div class="container mt-5" >
        <div class="row">
            <div class="col-12">
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>User ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>phone</th>
                            <th>Address</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    @foreach ($users as $user)
                    <tbody>
                        <tr>
                            <td>{{$user->id}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->profile->phone}}</td>
                            <td>{{$user->profile->address}}</td>
                            <td>
                            <a href="{{route('showformedit',$user->id)}}"><button class="btn borderless" type="submit">Edit</button></a>
                            <form action="{{route('delete',$user->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                             <button class="btn borderless" onclick="return confirm('Are you sure to delete.. ?')">delete</button></a>
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