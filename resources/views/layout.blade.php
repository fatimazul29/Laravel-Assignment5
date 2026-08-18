<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Book Library</title>

    <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background: #f4f1ec;
            color: #333;
        }

        nav {
            background: #4b2e1f;
            padding: 18px 8%;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        nav h2 {
            color: white;
        }

        nav a {
            text-decoration: none;
            color: white;
            background: #8b5e3c;
            padding: 10px 18px;
            border-radius: 6px;
        }

        .container {
            width: 85%;
            max-width: 1100px;
            margin: 40px auto;
        }

        .card {
            background: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.08);
        }

        h1 {
            color: #4b2e1f;
            margin-bottom: 25px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th {
            background: #4b2e1f;
            color: white;
            padding: 15px;
            text-align: left;
        }

        td {
            padding: 15px;
            border-bottom: 1px solid #ddd;
        }

        .btn {
            display: inline-block;
            padding: 9px 15px;
            border: none;
            border-radius: 6px;
            text-decoration: none;
            cursor: pointer;
            margin-right: 5px;
        }

        .btn-primary {
            background: #4b2e1f;
            color: white;
        }

        .btn-view {
            background: #3498db;
            color: white;
        }

        .btn-edit {
            background: #f39c12;
            color: white;
        }

        .btn-delete {
            background: #e74c3c;
            color: white;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 8px;
        }

        input,
        textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 16px;
        }

        textarea {
            height: 120px;
            resize: vertical;
        }

        .error {
            color: red;
            margin-top: 5px;
        }

        .success {
            background: #d4edda;
            color: #155724;
            padding: 15px;
            margin-bottom: 20px;
            border-radius: 6px;
        }

        .details p {
            margin: 15px 0;
            font-size: 18px;
        }

        .details strong {
            color: #4b2e1f;
        }

    </style>

</head>

<body>

<nav>

    <h2>📚 Book Library</h2>

    <a href="{{ route('books.index') }}">
        All Books
    </a>

</nav>

<div class="container">

    @if(session('success'))

        <div class="success">
            {{ session('success') }}
        </div>

    @endif

    @yield('content')

</div>

</body>

</html>