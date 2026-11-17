<?php

namespace App\Http\Controllers;

use App\Models\Lecturer;
use App\Http\Requests\StoreLecturerRequest;
use App\Http\Requests\UpdateLecturerRequest;
use Illuminate\Http\Request;

class LecturerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $lecturers = Lecturer::all();
        return view('LecturerView', ["lecturers" => $lecturers]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('LecturerForm');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Lecturer::create([
            "name" => $request->name,
            "age" => $request->age,
            "date_joined" => $request->date_joined,
            "specialization" => $request->specialization,
            "is_active" => $request->is_active
        ]);

        return redirect('/lecturers');
    }

    /**
     * Display the specified resource.
     */
    public function show(Lecturer $lecturer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Lecturer $lecturer)
    {
        return view('LecturerEdit', compact('lecturer'));
    }

    public function update(Request $request, Lecturer $lecturer)
    {
        $lecturer->update([
            "name" => $request->name,
            "age" => $request->age,
            "date_joined" => $request->date_joined,
            "specialization" => $request->specialization,
            "is_active" => $request->has('is_active') ? 1 : 0
        ]);

        return redirect('/lecturers');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Lecturer $lecturer)
    {
        $lecturer->delete();
        return redirect('/lecturers');
    }
}
