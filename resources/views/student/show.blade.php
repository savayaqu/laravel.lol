<table border="2px solid red">
    @foreach($students as $student)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$student->surname}}</td>
            <td>{{$student->name}}</td>
            <td>{{$student->patronymic}}</td>
            <td>{{$student->sex ? 'Мужской' : 'Женский'}}</td>
        </tr>
    @endforeach
    @dump($students)
</table>

