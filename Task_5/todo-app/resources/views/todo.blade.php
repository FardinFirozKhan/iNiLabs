<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <title>To-Do App</title>
</head>
<body>
    <div class="todo-container">
        <h1>To-Do List</h1>

        <div class="add-todo">
            <form action="" method="post">
                @csrf
                <input type="text" name="description" placeholder="Add a new task">
                <button class="add-btn">Add</button>
            </form>
        </div>
        <ul>
            @foreach ($todo as $to)
                
            
            <li>{{$to->description}}
                <div class="icons">
                    <a href="{{url('/update')}}/{{$to->id}}"><i class="fa-solid fa-square-pen fa-2x" style="color: #1a6af4;"></i></a>
                    <a href="{{url('/delete')}}/{{$to->id}}"><i class="fa-solid fa-trash fa-2x" style="color: #f00000;"></i></a>
                </div>   
            </li>
            @endforeach
        </ul>
    </div>
</body>
</html>
