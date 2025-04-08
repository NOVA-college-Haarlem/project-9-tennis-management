<h1>Registration Details</h1>
<p>Child Name: {{ $youthRegistration->child_firstname }} {{ $youthRegistration->child_lastname }}</p>
<p>Age: {{ $youthRegistration->child_age }}</p>
<p>Program: {{ $youthRegistration->program->name }}</p>
<p>Emergency Contact: {{ $youthRegistration->emergency_contact_phone }}</p>
<p>Status: {{ $youthRegistration->status }}</p>