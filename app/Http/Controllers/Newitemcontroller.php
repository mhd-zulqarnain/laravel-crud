<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
class Newitemcontroller extends Controller
{
    public function postnew(Request $request){
        $task= new Task;
        $task->name = $request->task;
        $task->save();
        return redirect('/');
    }
    public function updatepost(Request $request){

        $task= Task::find($request->id);
        $task->name = $request->task;
        $task->save();
        return redirect('/');
    }

}
