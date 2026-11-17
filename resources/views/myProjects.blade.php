@extends('layout.mainLayout')

@section('title', 'my Projects')

@section('main_content')
    <h1>My Projects</h1>
    <table border="1" bordercolor="black" cellpadding="10" cellspacing="0" background="white">
        <thead>
            <tr>
                <th>PROJECT</th>
                <th>SEMESTER</th>
                <th>DURATION</th>
                <th>DESCRIPTION</th>
                <th>STATUS</th>
                <th>ACTION</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($projects as $project)
                <tr>
                    <td>{{ $project->title }}</td>
                    <td>{{ $project->semester }}</td>
                    <td>{{ $project->start_date }} - {{ $project->end_date }}</td>
                    <td>{{ $project->description }}</td>
                    <td>{{ $project->active ? 'Active' : 'Inactive' }}</td>
                    <td>
                        <a href="{{ route('projects.edit', $project) }}" style="padding: 5px 10px; background-color: #ff9800; color: white; text-decoration: none; border-radius: 3px; margin-right: 5px;">Edit</a>
                        <form method="POST" action="{{ route('projects.destroy', $project) }}" style="display: inline;">
                            @csrf
                            @method('DELETE') 
                            <input type="submit" value="Delete" style="background-color: #f44336; color: white; border: none; padding: 5px 10px; cursor: pointer;">
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div style="margin-top: 15px;">
        <a href="{{ route('projects.create') }}" style="display: inline-block; padding: 8px 15px; background-color: #333; color: rgb(244, 241, 241); border: 1px solid #ccc; border-radius: 4px; text-decoration: none; cursor: pointer;">Add New Project</a>
    </div>
@endsection