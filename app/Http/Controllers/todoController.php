<?php

namespace App\Http\Controllers;

use App\ToDoModel;
use Illuminate\Http\Request;

class todoController extends Controller
{
    public function index()
    {
        $todos=ToDoModel::all();
        return view('todo.index',['todos'=>$todos]);
    }
    public function show($todoId)
    {
        $todo=ToDoModel::find($todoId);

        return view('todo.show',['todo'=>$todo]);
    }
    public function create()
    {
        return view('todo.create');
    }
    public function store()
    {
        $this->validate(request(),[
            'name'=>'required',
            'description'=>'required',
        ]);

        $data=request()->all();

        $todoCreate=new ToDoModel();

        $todoCreate->name=$data['name'];
        $todoCreate->description=$data['description'];
        $todoCreate->completed=false;

        $todoCreate->save();
        session()->flash('success','Created');

        return redirect('todos');
    }
    public function edit($todoId)
    {
        $todo=ToDoModel::find($todoId);
      
        return view('todo.edit',['todo'=>$todo]);
    }
    public function update($todoId)
    {
        $this->validate(request(),[
            'name'=>'required',
            'description'=>'required'
        ]);
        $data=request()->all();

        $todoUpdate=ToDoModel::find($todoId);

        $todoUpdate->name=$data['name'];
        $todoUpdate->description=$data['description'];
        $todoUpdate->completed=false;

        $todoUpdate->save();


        return redirect('todos');
    }
    public function delete($todoId)
    {
        $todoDelete=ToDoModel::find($todoId);

        $todoDelete->delete($todoId);

        return redirect('todos');
    }
    public function completed_update(ToDoModel $todo)
    {
        

        $todo->completed=true;
        $todo->save();

        session()->flash('completed','its completed now');

        return redirect('todos');
    }
}
