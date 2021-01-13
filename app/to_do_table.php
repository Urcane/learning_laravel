<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class to_do_table extends Model
{
    protected $table = 'to_do_table';
    protected $fillable =  ['tittle', 'description', 'start_date', 'end_date'];

}
