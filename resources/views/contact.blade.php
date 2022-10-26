<h1>This is My contact Number</h1>
<h1>Store Contact Person</h1>
@if (session('success'))
<div class="alert alert-success">
{{ session('success') }}
</div>
@endif
<form action="{{route('student')}}" method="post">
    @csrf 
    <input type="text" name="name" placeholder="Write your name"><br>
    <input type="email" name="email" placeholder="Write your email"><br>
    <input type="text" name="phone" placeholder="Write your phone"><br>
   <button type="submit">submit</button>
</form>
<a href="{{url('/')}}">Back To Home</a>