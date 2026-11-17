<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Http\Requests\StoreCourseRequest;
use App\Http\Requests\UpdateCourseRequest;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $courses = Course::all();
        return view('CourseView', ["courses" => $courses]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('CourseForm');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Course::create([
            "name" => $request->name,
            "lecturer" => $request->lecturer,
            "course_date" => $request->course_date,
            "sks" => $request->sks,
            "participants" => $request->participants,
            "must_be_taken" => $request->must_be_taken
        ]);

        return redirect('/courses');
    }

    /**
     * Display the specified resource.
     */
    public function show(Course $course)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Course $course)
    {
        return view('CourseEdit', compact('course'));
    }

    public function update(Request $request, Course $course)
    {
        $course->update([
            "name" => $request->name,
            "lecturer" => $request->lecturer,
            "course_date" => $request->course_date,
            "sks" => $request->sks,
            "participants" => $request->participants,
            "must_be_taken" => $request->has('must_be_taken') ? 1 : 0
        ]);

        return redirect('/courses');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Course $course)
    {
        $course->delete();
        return redirect('/courses');
    }
}
