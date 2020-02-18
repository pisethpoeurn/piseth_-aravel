<h1>There are the name of student as following: </h1>
@if (count($students) > 0)
    @foreach ($students as $student)
    <ul>
        <li>
            {{$student}}
        </li>
    </ul>
    @endforeach   
@endif