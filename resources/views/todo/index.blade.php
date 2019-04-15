@extends('layouts.app')


@section('title')
List ToDo
@endsection

@section('content')
                 
<h1 class="text-center my-5">ToDo Page</h1>
   <div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card card-default">
            <div class="card-header">
                Todo
            </div>
            <div class="card-body">
                
                    @foreach($todos as $todo)
                        <ul class="list-group">
                            <li class="list-group-item">{{$todo->name}}
                        
                            <a href="/todos/{{$todo->id}}/delete" class="btn btn-danger btn-small my-2 float-right">delete</a>
                            <a href="/todos/{{$todo->id}}" class="btn btn-info btn-small my-2 float-right"  onclick="return Conform_delete()">View</a>
                            
                            </li>
                        </ul>
                    @endforeach
                    

             </div>
        </div>
    </div>
    <script>
    function Conform_Delete()
    {
       return conform("Are You Sure Want to Delete?");
    }
</script>
@endsection