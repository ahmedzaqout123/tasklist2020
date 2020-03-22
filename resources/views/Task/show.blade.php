<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @foreach($tasks as $task)
  
    @if($task->id==$id)
    <h2>{{$task->task }}</h2>
    @endif
    @endforeach


</body>
</html>