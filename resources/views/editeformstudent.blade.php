
<form action="{{route('updatestudent',)}}" method="post">
    @csrf
    <input type="text" placeholder="Firstname" name="fname">
    <input type="text" placeholder="lastname" name="lname">
    <input type="number" placeholder="Age" name="age">

    <button type="submit">Update</button>
</form>