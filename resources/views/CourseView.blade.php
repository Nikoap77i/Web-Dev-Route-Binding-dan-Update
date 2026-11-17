@extends('layout.mainLayout')

@section('title', 'My Courses')

@section('main_content')
    <h1>My Courses</h1>
    <table border="1" bordercolor="black" cellpadding="10" cellspacing="0" background="white">
        <thead>
            <tr>
                <th>COURSE NAME</th>
                <th>LECTURER</th>
                <th>COURSE DATE</th>
                <th>SKS</th>
                <th>PARTICIPANTS</th>
                <th>MANDATORY</th>
                <th>ACTION</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($courses as $course)
                <tr>
                    <td>{{ $course->name }}</td>
                    <td>{{ $course->lecturer }}</td>
                    <td>{{ $course->course_date }}</td>
                    <td>{{ $course->sks }}</td>
                    <td>{{ $course->participants }}</td>
                    <td>{{ $course->must_be_taken ? 'Required' : 'Optional' }}</td>
                    <td>
                        <a href="{{ route('courses.edit', $course) }}" style="padding: 5px 10px; background-color: #ff9800; color: white; text-decoration: none; border-radius: 3px; margin-right: 5px;">Edit</a>
                        <form method="POST" action="{{ route('courses.destroy', $course) }}" style="display: inline;">
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
    <a href="{{ route('courses.create') }}" style="display: inline-block; padding: 8px 15px; background-color: #333; color: rgb(244, 241, 241); border: 1px solid #ccc; border-radius: 4px; text-decoration: none; cursor: pointer;">Add New Course</a>
</div>
@endsection