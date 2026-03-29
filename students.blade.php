<h1>Student List</h1>
<p>This is the student view page.</p>

<form action="/student/update" method="POST">
    @csrf
    @method('PUT')

    <input type="text" name="name" placeholder="Enter Name">
    <button type="submit">Add</button>
</form>

@if(session('name'))
<h3>Added Student:</h3>
<p>{{ session('name') }}</p>
@endif