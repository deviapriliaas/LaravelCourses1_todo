@extends('layouts.app')

@section('title')
    Create ToDo
@endsection

@section('content')
    <h1 class="text-center"> Create ToDo</h1>
    <div class="row justify-content-center">
        <div class="col-md-6">
          <div class="card card-default">
            <div class="card-header">Create New ToDo</div>
                <div class="card-body">
        @if($errors->any())
            <div class="alert alert-danger">
            @foreach($errors->all() as $error)
            <ul class="list-group">
                <li class="list-group-item">
                    {{$error}}
                </li>
            @endforeach    
            </ul>
            </div>

        @endif
                            <form action="/store-todo" method="post">
                            {{csrf_field()}}
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="name" name="name">
                                    </div>
                                    <div class="form-group">
                                        <textarea name="description" class="form-control" placeholder="description" cols="5" rows="5"></textarea>
                                    </div>
                                    <div class="form-group text-center">
                                    <button type="submit" class="btn btn-success"> Create ToDo </button>
                                    </div>

                             </form>
                 </div>
        
         </div>
        </div>
    </div>

@endsection