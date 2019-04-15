<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ToDoModel extends Model
{
    protected $table='todos';
    protected $fillable=['id','name','description','completed'];
}
