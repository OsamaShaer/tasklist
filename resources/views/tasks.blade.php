<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    {{-- <ul>
        @foreach ($tasks as $key => $task)
        <li><a href='/show/{{$key}}'>  {{$task}} </a> </li>
        @endforeach


    </ul> --}}
    {{-- <form action="/tasks" method="post">
        @csrf
            <input type="text" name="name" >
        <button type="submit"  >send</button>

        </form>
        @if(isset($name))
                <h1>  {{$name}}  </h1>
                @endif --}}

<ul>

    @foreach ( $tasks as $task )
    <li><a href= "/task/{{$task->id}}">{{ $task->name }} </a></li>

    @endforeach

</ul>
</body>
</html>
