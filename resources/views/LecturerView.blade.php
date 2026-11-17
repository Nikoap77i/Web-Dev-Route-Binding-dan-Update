@extends('layout.mainLayout')

@section('title', 'My Lecturers')

@section('main_content')
    <h1>My Lecturers</h1>
    <table border="1" bordercolor="black" cellpadding="10" cellspacing="0" background="white">
        <thead>
            <tr>
                <th>NAME</th>
                <th>AGE</th>
                <th>DATE JOINED</th>
                <th>SPECIALIZATION</th>
                <th>STATUS</th>
                <th>ACTION</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($lecturers as $lecturer)
                <tr>
                    <td>{{ $lecturer->name }}</td>
                    <td>{{ $lecturer->age }}</td>
                    <td>{{ $lecturer->date_joined }}</td>
                    <td>{{ $lecturer->specialization }}</td>
                    <td>{{ $lecturer->is_active ? 'Active' : 'Inactive' }}</td>
                    <td>
                        <a href="{{ route('lecturers.edit', $lecturer) }}" style="padding: 5px 10px; background-color: #ff9800; color: white; text-decoration: none; border-radius: 3px; margin-right: 5px;">Edit</a>
                        <form method="POST" action="{{ route('lecturers.destroy', $lecturer) }}" style="display: inline;">
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
        <a href="{{ route('lecturers.create') }}" style="display: inline-block; padding: 8px 15px; background-color: #333; color: rgb(244, 241, 241); border: 1px solid #ccc; border-radius: 4px; text-decoration: none; cursor: pointer;">Add New Lecturer</a>
    </div>
@endsection