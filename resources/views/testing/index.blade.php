<x-bububu>
    <x-slot:title>
        Это заголовок типа БУБУБУБУБУБУБУБУ
    </x-slot:title>
    <p style="font-size: {{$fontsize}}px">{{$name}}</p>
    <p>Текущее время: {{time()}}</p>
    <p>Текущее время: {{date('d-m-Y-H-i-s')}}</p>
    <p>Сумма: {{1+2+3}}</p>
    <p>Количество элементов в массиве: {{Count($arr)}}</p>
    <p>Второй чел: {{$arr[1]}}</p>
    <p>{{$arr[1] == 'Дмитрий' ? 'Крутий пон' : 'е крутой'}}</p>
    {{--Комментарий Blade--}}
    <!--Комментарий html -->

    {{--Условие--}}
    @if ($arr[0] == 'Василий')
    {{$arr[0] = 'Аломон'}}
    {{$arr[1] = 'Всем ку'}}
    @else
        {{$arr[2] = 'он пыхнул'}}
    @endif

    {{--Пока не--}}
    @unless($isAuth)
        <p>Вы не авторизованы</p>
    @endunless

    {{--Цикл--}}
    <ol>
    @foreach($arr as $el)
        @if($loop->first)
            Начало списка
        @endif
            <li>

                {{$el}} -



            @if($loop->odd)
                Нечетный
            @endif
                @if($loop->even)
                    Четный
                @endif

                {{$loop->iteration}}
                {{$loop->index}}
                {{$loop->remaining}}
                {{$loop->count}}
            </li>



            @if($loop->last)
                Конец списка
            @endif
    @endforeach
    </ol>

    <ol>
        @foreach($arr as $key =>$el)
            @if($key == 3)
                @continue
            @endif
                @if($key == 4)
                    @break
                @endif
            <li>{{$key}} - {{$el}}</li>
        @endforeach
    </ol>

    <ol>
        @foreach($arr as $key =>$el)
           @if($key % 2 ==0)
                <li>{{$el}}</li>
            @endif
        @endforeach
    </ol>

    <ol>
        @foreach($students as $student)
          <li>{{$student['surname']}} {{$student['name']}}</li>
        @endforeach
    </ol>

    <ol>
        @forelse($empty as $el)
            <li>{{$el}}</li>
        @empty <p>Массив пуст</p>
        @endforelse
    </ol>

    @for($i=1;$i<10; $i++)
        @php echo 'lol';
        @endphp
        <li>Я крутой {{$i}}</li>
    @endfor

    <b style="font-size: 30px">Задача 7</b>
    <table>
        <caption>Типы</caption>

            @foreach($users as $user)
                <tr>
                    <th>name</th>
                    <th>surname</th>
                    <th>banned</th>
                </tr>
                <tr>
                    <td>{{$user['name']}}</td>
                    <td>{{$user['surname']}}</td>
                    <td>@if($user['banned'] == true)
                            Забанен
                        @endif
                        @if($user['banned'] == false)
                            Активен
                        @endif
                    </td>
                </tr>

            @endforeach
    </table>

    <b style="font-size: 30px">Задача 8</b>
    <table>
        <caption>Типы</caption>

        @foreach($users as $user)
            <tr>
                <th>name</th>
                <th>surname</th>
                <th>banned</th>
            </tr>
        @if($user['banned'] == true)
                <tr style="color: red">
                    <td>{{$user['name']}}</td>
                    <td>{{$user['surname']}}</td>
                    <td>@if($user['banned'] == true)
                            Забанен
                        @endif
                        @if($user['banned'] == false)
                            Активен
                        @endif
                    </td>
                </tr>
        @endif
            @if($user['banned'] == false)
                <tr style="color: green">
                    <td>{{$user['name']}}</td>
                    <td>{{$user['surname']}}</td>
                    <td>@if($user['banned'] == true)
                            Забанен
                        @endif
                        @if($user['banned'] == false)
                            Активен
                        @endif
                    </td>
                </tr>
            @endif

        @endforeach
    </table>

    <b style="font-size: 30px">Задача 9</b>

</x-bububu>


