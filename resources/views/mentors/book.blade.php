<form method="POST" action="{{ route('mentor.store') }}">

@csrf

<input type="hidden" name="mentor_id" 
value="{{ $mentor->id }}">

<input type="hidden" name="mentor_email" 
value="{{ $mentor->email }}">

<div class="mb-3">
<label>Name</label>
<input type="text" name="name" class="form-control">
</div>

<div class="mb-3">
<label>Email</label>
<input type="email" name="email" class="form-control">
</div>

<div class="mb-3">
<label>Course</label>
<input type="text" name="course" 
value="{{ $mentor->course }}" 
class="form-control">
</div>

<div class="mb-3">
<label>Select Date</label>
<input type="date" name="date" class="form-control">
</div>

<div class="mb-3">
<label>Select Slot</label>
<select name="slot" class="form-control">
<option>10 AM - 11 AM</option>
<option>12 PM - 1 PM</option>
<option>3 PM - 4 PM</option>
</select>
</div>

<button class="btn btn-primary">
Book Session
</button>

</form>