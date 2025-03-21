<form action="{{ route('shehzad/submit') }}" method="POST">
    @csrf
    <input type="text" name="name" placeholder="Enter name">
    <input type="email" name="email" placeholder="Enter email">
    <button type="submit">Submit</button>
</form>
