@extends('layout.mainLayout')

@section('title', 'Edit Course')

@section('main_content')
    <h1>Edit Course</h1>

    <form action="{{ route('courses.update', $course) }}" method="POST">
        @csrf
        @method('PUT')
        <table cellpadding="10" cellspacing="0" style="border-collapse: collapse;">
            <tr>
                <td><label for="name">Course Name</label></td>
                <td>:</td>
                <td><input type="text" id="name" name="name" value="{{ old('name', $course->name) }}" required style="padding: 6px; width: 300px; background-color: #f9f9f9; border: 1px solid #333; border-radius: 4px;"></td>
            </tr>
            <tr>
                <td><label for="lecturer">Lecturer</label></td>
                <td>:</td>
                <td><input type="text" id="lecturer" name="lecturer" value="{{ old('lecturer', $course->lecturer) }}" required style="padding: 6px; width: 300px; background-color: #f9f9f9; border: 1px solid #333; border-radius: 4px;"></td>
            </tr>
            <tr>
                <td><label for="course_date">Course Date</label></td>
                <td>:</td>
                <td><input type="date" id="course_date" name="course_date" value="{{ old('course_date', $course->course_date) }}" required style="padding: 6px; width: 300px; background-color: #f9f9f9; border: 1px solid #333; border-radius: 4px;"></td>
            </tr>
            <tr>
                <td><label for="sks">SKS</label></td>
                <td>:</td>
                <td><input type="number" id="sks" name="sks" value="{{ old('sks', $course->sks) }}" min="1" max="6" required style="padding: 6px; width: 300px; background-color: #f9f9f9; border: 1px solid #333; border-radius: 4px;"></td>
            </tr>
            <tr>
                <td><label for="participants">Participants</label></td>
                <td>:</td>
                <td><input type="number" id="participants" name="participants" value="{{ old('participants', $course->participants) }}" min="0" required style="padding: 6px; width: 300px; background-color: #f9f9f9; border: 1px solid #333; border-radius: 4px;"></td>
            </tr>
            <tr>
                <td><label for="must_be_taken">Must Be Taken</label></td>
                <td>:</td>
                <td>
                    <input type="checkbox" id="must_be_taken" name="must_be_taken" value="1" {{ old('must_be_taken', $course->must_be_taken) ? 'checked' : '' }} style="accent-color: #333; transform: scale(1.1);">
                    <label for="must_be_taken" style="color: #333; margin-left: 5px;">Yes, this is a mandatory course</label>
                </td>
            </tr>
            <tr>
                <td colspan="3" style="padding-top: 15px;">
                    <button type="submit" style="padding: 8px 16px; background-color: #333; color: #fff; border: none; border-radius: 4px; cursor: pointer; font-weight: bold;">Update Course</button>
                    <a href="{{ route('courses') }}" style="margin-left: 10px; text-decoration: none; color: #333; font-weight: 500;">Cancel</a>
                </td>
            </tr>
        </table>
    </form>
@endsection