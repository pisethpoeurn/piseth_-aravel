
<h1>This is form Add Data</h1>
<form action="{{route('comments.store')}}" method="POST">
    @csrf
    <input type="text" placeholder="Comments" name="comment">

    <button type="submit">add</button>
</form>