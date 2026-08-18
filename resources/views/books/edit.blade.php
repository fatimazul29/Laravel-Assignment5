@extends('layout')

@section('content')

<div class="card">

    <h1>Edit Book</h1>

    <form action="{{ route('books.update', $book) }}" method="POST">

        @csrf

        @method('PUT')

        <div class="form-group">

            <label>Title *</label>

            <input type="text"
                   name="title"
                   value="{{ old('title', $book->title) }}"
                   placeholder="Enter book title">

            @error('title')
                <div class="error">{{ $message }}</div>
            @enderror

        </div>


        <div class="form-group">

            <label>Author *</label>

            <input type="text"
                   name="author"
                   value="{{ old('author', $book->author) }}"
                   placeholder="Enter author name">

            @error('author')
                <div class="error">{{ $message }}</div>
            @enderror

        </div>


        <div class="form-group">

            <label>Description</label>

            <textarea name="description"
                      placeholder="Enter book description">{{ old('description', $book->description) }}</textarea>

            @error('description')
                <div class="error">{{ $message }}</div>
            @enderror

        </div>


        <div class="form-group">

            <label>Published Year</label>

            <input type="number"
                   name="published_year"
                   value="{{ old('published_year', $book->published_year) }}"
                   placeholder="e.g. 2024">

            @error('published_year')
                <div class="error">{{ $message }}</div>
            @enderror

        </div>


        <button type="submit" class="btn btn-primary">
            Update Book
        </button>

        <a href="{{ route('books.index') }}"
           class="btn"
           style="background:#777; color:white;">
            Cancel
        </a>

    </form>

</div>

@endsection