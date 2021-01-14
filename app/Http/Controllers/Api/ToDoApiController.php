<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Traits\ToDoApiTraits;
use App\ToDoTables;
use Illuminate\Http\Request;

class ToDoApiController extends Controller
{
    use ToDoApiTraits;
}
