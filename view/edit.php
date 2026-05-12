@extends('layouts.app')

@section('content')

<h2>Edit Book</h2>

<form method="POST"
      action="/books/{{ $book->id }}">

@csrf
@method('PUT')

<div class="mb-3">

<label>Title</label>

<input type="text"
       name="title"
       value="{{ $book->title }}"
       class="form-control">

</div>

<div class="mb-3">

<label>Author</label>

<input type="text"
       name="author"
       value="{{ $book->author }}"
       class="form-control">

</div>

<div class="mb-3">

<label>Price</label>

<input type="number"
       name="price"
       value="{{ $book->price }}"
       class="form-control">

</div>

<div class="mb-3">

<label>Description</label>

<textarea name="description"
          class="form-control">

{{ $book->description }}

</textarea>

</div>

<div class="mb-3">

<label>Status</label>

<select name="availability"
        class="form-control">

<option value="1"
@if($book->availability)
selected
@endif>
Available
</option>

<option value="0"
@if(!$book->availability)
selected
@endif>
Out of Stock
</option>

</select>

</div>

<button class="btn btn-primary">
Update Book
</button>

</form>

@endsection
