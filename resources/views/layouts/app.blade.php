<!DOCTYPE html>
<html>
<head>
    <title>Admin Panel - Properties</title>
    <style>
        /* body {
            font-family: Arial, sans-serif;
            margin: 40px;
            background-color: #f5f5f5;
        }
        header {
            margin-bottom: 20px;
        }
        h2 {
            color: #333;
        }
        table {
            width: 100%;
            background: white;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 12px;
            text-align: left;
        }
        a, button {
            text-decoration: none;
            padding: 8px 12px;
            margin-right: 5px;
            background-color: #3490dc;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        form {
            margin-top: 20px;
        }
        input, textarea, select {
            width: 100%;
            padding: 10px;
            margin-bottom: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .error {
            color: red;
            font-size: 14px;
        }
        .success {
            color: green;
        } */
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" defer></script>

</head>
<body>

<header>
    <h2>@yield('title')</h2>
</header>

<main>
    @if(session('success'))
        <p class="success">{{ session('success') }}</p>
    @endif

    @yield('content')
</main>

</body>
</html>
