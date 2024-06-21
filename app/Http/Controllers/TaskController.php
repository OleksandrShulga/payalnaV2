<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    public function index () {
        $task = new Task();
        return view('index', ['data' => $task::all()]);
    }

    public function create (Request $request) {
        if ($request->has('title') and $request->has('text')) {
            $request->validate([
                'title' => 'required|string',
                'text' => 'required|string'
            ]);
            $task = new Task();
            $task->title = $request->title;
            $task->text = $request->text;
            $task->status = 'Створено';
            $task->created_at = Carbon::now();
            $task->updated_at = Carbon::now();
            $task->save();
            echo 'Задача успішно додана в БД';
        }
        return view('create');
    }
    public function edit (Request $request, $id) {
        $task = new Task();
        if ($request->has('title') and $request->has('text') and $request->has('status')) {
            $request->validate([
                'title' => 'required|string',
                'text' => 'required|string'
            ]);
            $task_edit = $task::find($id);
            $task_edit->title = $request->title;
            $task_edit->text = $request->text;
            $task_edit->status = $request->status;
            $task_edit->updated_at = Carbon::now();
            $task_edit->save();
            echo 'Задача успішно змінена в БД';
        }
        return view('edit', ['data' => $task::find($id)]);
    }

    public function view ($id) {
        $task = new Task();
        return view('view', ['data' => $task::find($id)]);
    }

    public function delete ($id) {
        $task = new Task();
        $task::destroy($id);
        return redirect()->intended('/');
    }
}
