@extends('layout')

@section('content')

<div class="card">

    <div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:25px;">

        <h1>My Book Collection</h1>

        <a href="{{ route('books.create') }}" class="btn btn-primary">
            + Add New Book
        </a>

    </div>

    @if($books->count() > 0)

        <table>

            <thead>

                <tr>
                    <th>Title</th>
                    <th>Author</th>
                    <th>Year</th>
                    <th>Actions</th>
                </tr>

            </thead>

            <tbody>

                @foreach($books as $book)

                    <tr>

                        <td>
                            {{ $book->title }}
                        </td>

                        <td>
                            {{ $book->author }}
                        </td>

                        <td>
                            {{ $book->published_year ?? 'N/A' }}
                        </td>

                        <td>

                            <a href="{{ route('books.show', $book) }}"
                               class="btn btn-view">
                                View
                            </a>

                            <a href="{{ route('books.edit', $book) }}"
                               class="btn btn-edit">
                                Edit
                            </a>

                            <form action="{{ route('books.destroy', $book) }}"
                                  method="POST"
                                  style="display:inline;">

                                @csrf

                                @method('DELETE')

                                <button type="submit"
                                        class="btn btn-delete"
                                        onclick="return confirm('Are you sure you want to delete this book?')">

                                    Delete

                                </button>

                            </form>

                        </td>

                    </tr>

                @endforeach

            </tbody>

        </table>

    @else

        <p>No books available. Add your first book!</p>

    @endif

</div>

@endsection