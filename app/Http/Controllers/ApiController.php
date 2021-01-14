<?php

namespace App\Http\Controllers;

use App\ToDoTables;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function getAllToDoList()
    {
        $toDoList = ToDoTables::get();

        return response($toDoList, 200);
    }

    public function getToDoList(ToDoTables $todo)
    {
        return $todo;

        // if(ToDoTables::where('id', $id)->exists()){
        //     $toDoList = ToDoTables::find($id);
            
        //     return \response($toDoList, 200);
        // } else {
        //     return \response() -> json([
        //         "messages" => "To Do List not Found"
        //     ], 404);
        // };
    }

    public function createToDoList(Request $request)
    {
            $toDoList = new ToDoTables;
            
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
        if (ToDoTables::where('id', $id) -> exists()) {
            $toDoList = ToDoTables::find($id);
            
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
        if(ToDoTables::where('id', $id)->exists()){
            ToDoTables::destroy($id);
            
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
