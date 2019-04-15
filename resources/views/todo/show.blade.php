@extends('layouts.app')

 @section('title')
  {{$todo->name}}
 @endsection       

@section('content')
<h1 class="text-center">{{$todo->name}}</h1>

<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card card-default">
            <div class="card card-header">
              details
            </div>
                 <div class="card-body">
                     {{$todo->description}}            
                 </div>

        </div>                 
             <a href="/todos/{{$todo->id}}/edit" class="btn btn-info">Edit</a>  
    </div>
</div>
@endsection