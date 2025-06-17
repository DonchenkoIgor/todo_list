<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>To-Do Лист</title>
    <style>
        body {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
            background: #f7f9fc;
            color: #333;
            margin: 0;
            padding: 0 20px;
            line-height: 1.6;
        }
        header {
            background: #3b82f6;
            color: white;
            padding: 15px 20px;
            margin-bottom: 30px;
            box-shadow: 0 2px 6px rgba(0,0,0,0.1);
        }
        header h1 {
            margin: 0;
            font-weight: 600;
            font-size: 24px;
        }
        main {
            max-width: 900px;
            margin: 0 auto 50px;
            background: white;
            padding: 25px 30px;
            box-shadow: 0 2px 12px rgba(0,0,0,0.05);
            border-radius: 8px;
        }
        a {
            color: #3b82f6;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
        button {
            background: #3b82f6;
            border: none;
            padding: 8px 16px;
            color: white;
            font-weight: 600;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.2s ease-in-out;
        }
        button:hover {
            background: #2563eb;
        }
        input, select, textarea {
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            width: 100%;
            max-width: 400px;
            box-sizing: border-box;
            margin-bottom: 15px;
            font-size: 14px;
        }
        table {
            border-collapse: collapse;
            width: 100%;
            max-width: 100%;
        }
        th, td {
            padding: 10px 15px;
            border-bottom: 1px solid #eee;
            text-align: left;
        }
        th {
            background: #f3f4f6;
        }
        form {
            margin: 0;
            display: inline;
        }
    </style>
</head>
<body>
<header>
    <h1>To-Do Лист</h1>
</header>
<main>
    @yield('content')
</main>
</body>
</html>

