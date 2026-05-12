@extends('layouts.app')

@section('content')

<h2>Add Book</h2>

<form method="POST"
      action="/books">

@csrf

<div class="mb-3">

<label>Title</label>

<input type="text"
       name="title"
       class="form-control">

</div>

<div class="mb-3">

<label>Author</label>

<input type="text"
       name="author"
       class="form-control">

</div>

<div class="mb-3">

<label>Price</label>

<input type="number"
       name="price"
       class="form-control">

</div>

<div class="mb-3">

<label>Description</label>

<textarea name="description"
          class="form-control">
</textarea>

</div>

<div class="mb-3">

<label>Availability</label>

<select name="availability"
        class="form-control">

<option value="1">
Available
</option>

<option value="0">
Out of Stock
</option>

</select>

</div>

<button class="btn btn-success">
Save Book
</button>

</form>

@endsection
