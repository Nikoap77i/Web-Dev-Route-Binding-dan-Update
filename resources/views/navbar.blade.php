<nav class="main-nav">
    <a href="{{ url('/') }}" class="{{ request()->is('/') ? 'active-link' : '' }}">Home</a>
    <a href="{{ url('/projects') }}" class="{{ request()->is('projects') ? 'active-link' : '' }}">My Projects</a>
    <a href="{{ url('/contact') }}" class="{{ request()->is('contact') ? 'active-link' : '' }}">Contact</a>
    <a href="{{ url('/checkerboard') }}" class="{{ request()->is('checkerboard') ? 'active-link' : '' }}">Checkerboard</a>
    <a href="{{ url('/courses') }}" class="{{ request()->is('courses') ? 'active-link' : '' }}">Courses</a>
    <a href="{{ url('/lecturers') }}" class="{{ request()->is('lecturers') ? 'active-link' : '' }}">Lecturers</a>
</nav>