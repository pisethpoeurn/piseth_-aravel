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
                <h1 class="text-center">the List of Students</h1>
                <a href="students/create"> <button class="btn btn-success">Add Students</button></a>
                <table class="table table-bordered">
                    <thead >
                        <tr>
                            <th>ID</th>
                            <th>FirstName</th>
                            <th>LastName</th>
                            <th>Age</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    @foreach ($students as $student)
                        <tbody>
                            <tr>
                            <td>{{$student ->id}}</td>
                            <td>{{$student ->firstName}}</td>
                            <td>{{$student ->lastName}}</td>
                            <td>{{$student ->age}}</td>
                            <td>
                            <a href="{{route('students.edit',$student->id)}}"><button>edit</button></a>
                            <a onclick="return confirm('Are you sure to delete.. ?')"  href="{{route('delete',$student->id)}}"><button>delete</button></a>
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
