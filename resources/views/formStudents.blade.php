
@if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
    </ul>
@endif
<form action="{{route('students.store')}}" method="post">
    @csrf
    <input type="text" placeholder="Firstname" name="fname">
    <input type="text" placeholder="lastname" name="lname">
    <input type="number" placeholder="Age" name="age">

    <button type="submit">add</button>
</form>