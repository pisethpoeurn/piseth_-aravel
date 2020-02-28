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
                    <div class="card-header">Edit User</div>
                    <div class="card-body">
                        {{-- @foreach ($users as $user) --}}
                            <form action="{{route('updatePrfile',$users->id)}}" method="POST">
                                    @method('put')
                                    @csrf
                                <input type="text" name="fname" value="{{$users->name}}">
                                <input type="email" name="email" value="{{$users->email}}">
                                <input type="text" name="phone" value="{{$users->profile->phone}}">
                                <input type="text" name="address" value="{{$users->profile->address}}">
                                <button class="btn btn-success">Update</button>
                            </form>
                        {{-- @endforeach --}}
                    </div>
                </div>
            </div>
            <div class="col-3"></div>
        </div>
    </div>
</body>
</html>