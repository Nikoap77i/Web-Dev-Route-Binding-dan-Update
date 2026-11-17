@extends('layout.mainLayout')

@section('title', 'Edit Project')

@section('main_content')
    <h1>Edit Project</h1>

    <form action="{{ route('projects.update', $project) }}" method="POST">
        @csrf
        @method('PUT')
        <table cellpadding="10" cellspacing="0" style="border-collapse: collapse;">
            <tr>
                <td><label for="title">Project Title</label></td>
                <td>:</td>
                <td><input type="text" id="title" name="title" value="{{ old('title', $project->title) }}" required style="padding: 6px; width: 300px; background-color: #f9f9f9; border: 1px solid #333; border-radius: 4px;"></td>
            </tr>
            <tr>
                <td><label for="semester">Semester</label></td>
                <td>:</td>
                <td><input type="number" id="semester" name="semester" value="{{ old('semester', $project->semester) }}" min="1" max="8" required style="padding: 6px; width: 300px; background-color: #f9f9f9; border: 1px solid #333; border-radius: 4px;"></td>
            </tr>
            <tr>
                <td><label for="start_date">Start Date</label></td>
                <td>:</td>
                <td><input type="date" id="start_date" name="start_date" value="{{ old('start_date', $project->start_date) }}" required style="padding: 6px; width: 300px; background-color: #f9f9f9; border: 1px solid #333; border-radius: 4px;"></td>
            </tr>
            <tr>
                <td><label for="end_date">End Date</label></td>
                <td>:</td>
                <td><input type="date" id="end_date" name="end_date" value="{{ old('end_date', $project->end_date) }}" style="padding: 6px; width: 300px; background-color: #f9f9f9; border: 1px solid #333; border-radius: 4px;"></td>
            </tr>
            <tr>
                <td><label for="description">Description</label></td>
                <td>:</td>
                <td><textarea id="description" name="description" rows="4" style="padding: 6px; width: 300px; background-color: #f9f9f9; border: 1px solid #333; border-radius: 4px;">{{ old('description', $project->description) }}</textarea></td>
            </tr>
            <tr>
                <td><label for="active">Active Status</label></td>
                <td>:</td>
                <td>
                    <input type="checkbox" id="active" name="active" value="1" {{ old('active', $project->active) ? 'checked' : '' }} style="accent-color: #333; transform: scale(1.1);">
                    <label for="active" style="color: #333; margin-left: 5px;">Yes, this project is active</label>
                </td>
            </tr>
            <tr>
                <td colspan="3" style="padding-top: 15px;">
                    <button type="submit" style="padding: 8px 16px; background-color: #333; color: #fff; border: none; border-radius: 4px; cursor: pointer; font-weight: bold;">Update Project</button>
                    <a href="{{ route('projects') }}" style="margin-left: 10px; text-decoration: none; color: #333; font-weight: 500;">Cancel</a>
                </td>
            </tr>
        </table>
    </form>
@endsection