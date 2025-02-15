<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Retrieve all tasks from database
        $tasks = Task::all();

        return view('tasks.index', compact('tasks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Show create task form
        return view('tasks.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate data
        $request -> validate([
            'title' => 'required|max:255',
            'description' => 'nullable',
        ]);

        // Create task
        Task::create($request -> all());

        // Confirm creation and redirect to index
        return redirect() -> route('tasks.index')
        -> with('success', 'Task created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Task $task)
    {
        // Show task details
        return view('tasks.show', compact('task'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Task $task)
    {
        // Show edit task form
        return view('tasks.edit', compact('task'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Task $task)
    {
        // Validate data
        $request -> validate([
            'title' => 'required|max:255',
            'description' => 'nullable',
        ]);

        $data = $request -> all();

        // Handle is_completed checkbox:
        $data['is_completed'] = $request->has('is_completed');

        // Update task
        $task -> update($data);

        // Confirm update and redirect to index
        return redirect() -> route('tasks.index')
        -> with('success', 'Task updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Task $task)
    {
        // Delete task
        $task -> delete(); // Delete the task

        // Confirm deletion and redirect to index
        return redirect() -> route('tasks.index')
        -> with('success', 'Task deleted successfully.');
    }
}
