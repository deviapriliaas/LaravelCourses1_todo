<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" crossorigin="anonymous">

        <!-- Styles -->
        
    </head>
        <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="/">ToDos App</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/todos">ToDo <span class="sr-only">(current)</span></a>
      </li>  
      <li class="nav-item active">
        <a class="nav-link" href="/new-todo">Create ToDo <span class="sr-only">(current)</span></a>
      </li> 
      <li class="nav-item active">
        <a class="nav-link" href="/todo-false">To do false<span class="sr-only">(current)</span></a>
      </li>      
    </ul>
  
  </div>
</nav>
       
            <div class="container">

            @if(session()->has('success'))
            <div class="alert alert-success">
                
                    {{session()->get('success')}}
                
            </div>
            @endif
            @if(session()->has('completed'))
            <div class="alert alert-success">
                
               {{session()->get('completed')}}
                
            </div>
            @endif
            
                    @yield('content')
             </div> 

     </body>
</html>
