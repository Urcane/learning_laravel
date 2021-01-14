<?php

namespace App\Http\Traits;

use App\ToDoTables;
use Illuminate\Http\Request;

/**
 * Used for ToDoApi Controller
 */
trait ToDoApiTraits
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $toDoList = ToDoTables::all();

        return response($toDoList, 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(ToDoTables $todo)
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

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (ToDoTables::where('id', $id)->exists()) {
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
