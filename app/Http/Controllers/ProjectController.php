<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Http\Requests\StoreProjectRequest;
use App\Http\Requests\UpdateProjectRequest;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::all();
        return view('myProjects', ["projects" => $projects]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('ProjectForm');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Project::create([
            "title" => $request->title,
            "semester" => $request->semester,
            "start_date" => $request->start_date,
            "end_date" => $request->end_date,
            "description" => $request->description,
            "active" => $request->active
        ]);

        return redirect('/projects');
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        return view('ProjectEdit', compact('project'));
    }

    public function update(Request $request, Project $project)
    {
        $project->update([
            "title" => $request->title,
            "semester" => $request->semester,
            "start_date" => $request->start_date,
            "end_date" => $request->end_date,
            "description" => $request->description,
            "active" => $request->has('active') ? 1 : 0
        ]);

        return redirect('/projects');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        $project->delete();
        return redirect('/projects');
    }
}
