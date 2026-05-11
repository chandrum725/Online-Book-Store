@extends('layouts.app')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">

    <h2>Admin Dashboard</h2>

    <a href="/admin/books/create"
       class="btn btn-success">
        Add New Book
    </a>

</div>

<div class="card shadow">

    <div class="card-body">

        <table class="table table-bordered table-hover">

            <thead class="table-dark">

                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Author</th>
                    <th>Price</th>
                    <th>Stock</th>
                    <th>Action</th>
                </tr>

            </thead>

            <tbody>

                @foreach($books as $book)

                <tr>

                    <td>{{ $book->id }}</td>

                    <td>{{ $book->title }}</td>

                    <td>{{ $book->author }}</td>

                    <td>₹ {{ $book->price }}</td>

                    <td>{{ $book->stock }}</td>

                    <td>

                        <a href="/admin/books/edit/{{ $book->id }}"
                           class="btn btn-warning btn-sm">
                            Edit
                        </a>

                        <a href="/admin/books/delete/{{ $book->id }}"
                           class="btn btn-danger btn-sm">
                            Delete
                        </a>

                    </td>

                </tr>

                @endforeach

            </tbody>

        </table>

    </div>

</div>

@endsection