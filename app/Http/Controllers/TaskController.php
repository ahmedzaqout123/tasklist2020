<?php

namespace App\Http\Controllers;
// use Validator;
use App\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class TaskController extends Controller
{
    public function index()
    {
        // $tasks =DB::table('tasks')->get(); 
        $tasks=Task::orderBy('created_at')->get();
        return view('Task.index')->with([
            'tasks'=>$tasks,
          
        ]);


    }
public function show($id)
    {
        // $task =DB::table('tasks')->find($id); 
        $task=Task::where('id',$id)->get();
        return view('Task.show',compact('task'));
        
    }
    public function store(Request $request){
     
   $request->validate([
'name'=>'required|min:5|max:255',



   ]);
        $task=new Task();
        $task->name=$request->name;
        $task->save();
        return redirect()->back();


    }
    public function destroy($id){

        // $task =DB::table('tasks')->where ('id','=',$id)->delete();
       $task=Task::find($id);
       $task->delete();
        return redirect()->back();

    }
    public function edit($id){
        // $tt =DB::table('tasks')->find($id); 

        // $tasks =DB::table('tasks')->get(); 
        // $task=Task::all();
        $tt = Task::find($id);
        $tasks = Task::orderBy('created_at')->get();
        return view('Task.edit',compact('tasks','tt'));

              
              


    }
    public function update(Request $request,$id){
        
      
    //    $affected = DB::table('tasks')-> where('id', $id)->update(['name'=>$request->name,
    //    'created_at' => now(),
    //    'updated_at' => now(),]);
    //    return redirect('/');

        $request->validate([
            'name' =>'required|min:5|max:255',
        ]);

        Task::where('id',$id)->update(['name'=> $request->name]);
        return redirect('/');

            
        }

}