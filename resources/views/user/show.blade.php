<table border="2px solid red">
    @foreach($users as $user)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$user->surname}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->login}}</td>
            <td>{{$user->password}}</td>
        </tr>
    @endforeach
</table>

