<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\toDo;

class ToDoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = toDo::all();
        return view('todo.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('todo.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        toDo::create([
            'title' => $request->title,
            'description' => $request->description
        ]);
        return redirect('to-do');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return 'sini';
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = toDo::find($id);
        return view('todo.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $todo = toDo::find($id);
        $todo->update([
            'title' => $request->title,
            'description' => $request->description,
            'status' => $request->status
        ]);
        return redirect('to-do');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = toDo::find($id);
        $data->delete();
        return redirect('to-do');
    }
}
