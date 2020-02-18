<h1>Subject list</h1>
@if (count($subjects) > 0)
<table>
    <thead>
        <tr>
            <th>Subjects</th>
            <th>Score</th>
        </tr>
    </thead>
    @foreach ($subjects as $subject)
    <tbody>
        <tr>
            <td> {{$subject[0]}}</td>
            <td> {{$subject[1]}}</td>
        </tr>
    </tbody>
    @endforeach
</table>   
@endif