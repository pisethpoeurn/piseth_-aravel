
<h1>This is form Add Post</h1>
<link rel="stylesheet" href="css/app.css">
<form action="{{route('addPosts','id')}}" method="POST">
    @csrf
    <input type="text" placeholder="title" name="title"><br>
    <input type="text" placeholder="body" name="body">
    <button type="submit">add</button>
</form>