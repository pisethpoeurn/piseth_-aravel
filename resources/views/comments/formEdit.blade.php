<h1>This is form  Edit Data</h1>
<form action="{{route('comments.update',$comments->id)}}" method="POST">
    @method('put')
    @csrf
<input type="text" placeholder="Comments" name="comment" value="{{$comments->comments}}">

    <button type="submit">edit</button>
</form>