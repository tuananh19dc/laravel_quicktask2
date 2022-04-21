<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\User;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('tasks.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(
            request(),
            [
                'name' => 'required',
            ],
        );

        if (DB::table('users')->where('id', session('id'))->get() && empty(DB::table('tasks')->where('name', $request->name)->first())) {
            DB::table('tasks')->insert([
                'name' => $request->name,
            ]);
            DB::table('task_user')->insert([
                'user_id' => session('id'),
                'task_id' => DB::table('tasks')->where('name', $request->name)->first()->id
            ]);

            return redirect()->route('task.show', ['id' => session('id')])->with('mess', 'Add new success !!!');
        }

        return redirect()->back()->with(['mess' => 'New creation failed !!!', 'error_name' => 'name already exists !!!']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $arr = [];
        $tasks = DB::table('task_user')->select('task_id')->where('user_id', $id)->get();
        foreach ($tasks as $item) {
            $arr[] = $item->task_id;
        }

        $tasks = DB::table('tasks')->whereIn('id', $arr)->paginate(5);
        session()->put('id', $id);

        return view('tasks.tasks', compact('tasks'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $task = DB::table('tasks')->find($id);

        return view('tasks.edit', compact('task'));
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
        $this->validate(
            request(),
            [
                'name' => 'required',
            ]
        );

        DB::table('tasks')->where('id', $id)->update([
            'name' => $request->name
        ]);

        return redirect()->route('task.show', ['id' => session('id')])->with('mess', 'Update success !!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (DB::table('tasks')->find($id)) {
            DB::table('tasks')->where('id', $id)->delete();
        }

        return redirect()->route('task.show', ['id' => session('id')])->with('mess', 'Delete success !!!');
    }
}
