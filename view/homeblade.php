@extends('layouts.app')

@section('content')

<h1 class="mb-4">
    Online Book Store
</h1>

<h3 class="mb-4">
    Google Books API Data
</h3>

<div class="row">

@foreach($booksApi['items'] as $item)

<div class="col-md-3">

<div class="card mb-4 shadow-sm h-100">

@if(isset($item['volumeInfo']['imageLinks']['thumbnail']))

<img src="
{{ $item['volumeInfo']['imageLinks']['thumbnail'] }}"
class="card-img-top">

@endif

<div class="card-body">

<h5>

{{ $item['volumeInfo']['title'] ?? 'No Title' }}

</h5>

<p>

Author:
{{ $item['volumeInfo']['authors'][0] ?? 'Unknown' }}

</p>

<a href="
{{ $item['volumeInfo']['previewLink'] }}"
target="_blank"
class="btn btn-primary">

View Book

</a>

</div>

</div>

</div>

@endforeach

</div>

@endsection
