<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class TaskController extends Controller
{
    public function tasks()
    {
        $tasks =DB::table('tasks')->get(); 
        return view('Task.welcome')->with([
            'tasks'=>$tasks,
          
        ]);


    }
public function show($id)
    {
        $tasks =DB::table('tasks')->get(); 
        return view('Task.show')->with([
            'tasks'=>$tasks,
            'id'=>$id
        ]);
    }
}
