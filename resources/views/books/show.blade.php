@extends('layout')

@section('content')

<div class="card">

    <h1>Book Details</h1>

    <div class="details">

        <p>
            <strong>Title:</strong>
            {{ $book->title }}
        </p>

        <p>
            <strong>Author:</strong>
            {{ $book->author }}
        </p>

        <p>
            <strong>Published Year:</strong>
            {{ $book->published_year ?? 'Not Available' }}
        </p>

        <p>
            <strong>Description:</strong>
            {{ $book->description ?? 'No description available.' }}
        </p>

    </div>

    <br>

    <a href="{{ route('books.edit', $book) }}"
       class="btn btn-edit">
        Edit Book
    </a>

    <a href="{{ route('books.index') }}"
       class="btn btn-primary">
        Back to Books
    </a>

</div>

@endsection