<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ToDoTables extends Model
{
    protected $table = 'to_do_table';
    protected $fillable =  ['tittle', 'description', 'start_date', 'end_date'];

}
