<!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="{{ asset('style.css') }}">
     <title>Update</title>
 </head>
 <body>
     <div class="todo-container">
         <h1>Update</h1>
         <div class="add-todo">
            <form action="" method="post">
                @csrf
                <input type="text" name="description" value="{{$todo->description}}">
                <button class="add-btn">Add</button>
            </form>
         </div>

     </div>
 </body>
 </html>
 