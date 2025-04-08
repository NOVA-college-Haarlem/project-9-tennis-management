<h1>Youth Registrations</h1>
<ul>
    @foreach($registrations as $registration)
        <li>
            {{ $registration->child_firstname }} {{ $registration->child_lastname }} - 
            Program: {{ $registration->program->name }}
        </li>
    @endforeach
</ul>