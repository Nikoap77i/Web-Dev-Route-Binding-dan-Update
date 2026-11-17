@extends('layout.mainLayout')

@section('title', 'Add New Lecturer')

@section('main_content')
    <h1>Add New Lecturer</h1>

    @if ($errors->any())
        <div style="color: red; margin-bottom: 15px;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('lecturers.store') }}" method="POST">
        @csrf
        <table cellpadding="10" cellspacing="0" style="border-collapse: collapse;">
            <tr>
                <td><label for="name">Lecturer Name</label></td>
                <td>:</td>
                <td><input type="text" id="name" name="name" value="{{ old('name') }}" required style="padding: 6px; width: 300px; background-color: #f9f9f9; border: 1px solid #333; border-radius: 4px;"></td>
            </tr>
            <tr>
                <td><label for="age">Age</label></td>
                <td>:</td>
                <td><input type="number" id="age" name="age" value="{{ old('age') }}" min="18" max="100" required style="padding: 6px; width: 300px; background-color: #f9f9f9; border: 1px solid #333; border-radius: 4px;"></td>
            </tr>
            <tr>
                <td><label for="date_joined">Date Joined</label></td>
                <td>:</td>
                <td><input type="date" id="date_joined" name="date_joined" value="{{ old('date_joined') }}" required style="padding: 6px; width: 300px; background-color: #f9f9f9; border: 1px solid #333; border-radius: 4px;"></td>
            </tr>
            <tr>
                <td><label for="specialization">Specialization</label></td>
                <td>:</td>
                <td><input type="text" id="specialization" name="specialization" value="{{ old('specialization') }}" required style="padding: 6px; width: 300px; background-color: #f9f9f9; border: 1px solid #333; border-radius: 4px;"></td>
            </tr>
            <tr>
                <td><label for="is_active">Is Active</label></td>
                <td>:</td>
                <td>
                    <input type="checkbox" id="is_active" name="is_active" value="1" {{ old('is_active') ? 'checked' : '' }} style="accent-color: #333; transform: scale(1.1);">
                    <label for="is_active" style="color: #333; margin-left: 5px;">Yes, this lecturer is active</label>
                </td>
            </tr>
            <tr>
                <td colspan="3" style="padding-top: 15px;">
                    <button type="submit" style="padding: 8px 16px; background-color: #333; color: #fff; border: none; border-radius: 4px; cursor: pointer; font-weight: bold;">Save Lecturer</button>
                    <a href="{{ route('lecturers') }}" style="margin-left: 10px; text-decoration: none; color: #333; font-weight: 500;">Cancel</a>
                </td>
            </tr>
        </table>
    </form>
@endsection