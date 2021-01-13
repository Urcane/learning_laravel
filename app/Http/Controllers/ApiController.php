<?php

namespace App\Http\Controllers;

use App\to_do_table;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function getAllToDoList()
    {
        $toDoList = to_do_table::get();

        return response($toDoList, 200);
    }

    public function getToDoList(to_do_table $todo)
    {
        return $todo;

        // if(to_do_table::where('id', $id)->exists()){
        //     $toDoList = to_do_table::find($id);
            
        //     return \response($toDoList, 200);
        // } else {
        //     return \response() -> json([
        //         "messages" => "To Do List not Found"
        //     ], 404);
        // };
    }

    public function createToDoList(Request $request)
    {
            $toDoList = new to_do_table;
            
            $toDoList -> tittle = $request -> tittle;
            $toDoList -> description = $request -> description;
            $toDoList -> start_date = date('Y-m-d', strtotime($request -> start_date));
            $toDoList -> end_date = date('Y-m-d', strtotime($request -> end_date));
            $toDoList -> save();

            return \response() -> json([
                "message" => "To Do List created"   
            ], 201);
    }

    public function updateToDoList(Request $request, $id)
    {
        if (to_do_table::where('id', $id) -> exists()) {
            $toDoList = to_do_table::find($id);
            
            $toDoList -> tittle = is_null($request-> tittle) ?  $toDoList -> tittle :  $request -> tittle;
            $toDoList -> description = is_null($request-> description) ?  $toDoList -> description : $request -> description;
            $toDoList -> start_date = is_null($request-> start_date) ?  date('Y-m-d', strtotime($toDoList -> start_date)) : date('Y-m-d', strtotime($request -> start_date));
            $toDoList -> end_date = is_null($request-> end_date) ?  date('Y-m-d', strtotime($toDoList -> end_date)) : date('Y-m-d', strtotime($request -> end_date));
            $toDoList -> save();

            return \response() -> json([
                "message" => "Berhasil",
                "result" => $toDoList
            ], 200);
        }
    }
    
    public function deleteToDoList($id)
    {
        if(to_do_table::where('id', $id)->exists()){
            to_do_table::destroy($id);
            
            return \response() -> json([
                "message" => "To Do List Deleted"
            ], 200);
        } else {
            return \response([
                "message" => "To Do List not Found"
            ], 404);
        };
    }
}
