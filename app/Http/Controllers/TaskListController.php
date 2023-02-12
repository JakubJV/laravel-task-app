<?php

namespace App\Http\Controllers;

use Log;
use App\Models\ListTask;
use Illuminate\Http\Request;

class TaskListController extends Controller
{

    public function index()
    {

        if (auth()->check()) {
            return view('index', ['listTasks' => ListTask::where('is_finished', 0)
                ->where('user_id', auth()->user()->id)
                ->get()]);
        } else {
            return view('index');
        }
    }


    public function finishedMark($id)
    {
        $listTask = ListTask::find($id);
        $listTask->is_finished = 1;
        $listTask->save();

        return redirect('/');
    }

    public function saveTask(Request $request)
    {

        $newListTask = new ListTask;
        $newListTask->name = $request->listTask;
        $newListTask->is_finished = 0;
        $newListTask->user_id = auth()->user()->id;
        $newListTask->save();

        return redirect('/');
    }
}
