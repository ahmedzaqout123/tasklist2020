<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class TaskController extends Controller
{
    public function index()
    {
        $tasks =DB::table('tasks')->get(); 
        return view('Task.index')->with([
            'tasks'=>$tasks,
          
        ]);


    }
public function show($id)
    {
        $task =DB::table('tasks')->find($id); 
        return view('Task.show',compact('task'));
        
    }
    public function store(Request $request){
     
        // dd($request);
        $task =DB::table('tasks')->insert([

'name'=>$request->name,
'created_at' => now(),
'upload_at' => now(),


        ]
        ); 
        return redirect()->back();


    }
}