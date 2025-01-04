<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        /* data list */
         /* Reset some default styling */
         * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            text-align: center;
            padding: 20px;
        }

        h1 {
            color: #ffffff;
            margin-bottom: 20px;
        }

        /* Table Styling */
        table {
            width: 100%;
            margin: 0 auto;
            border-collapse: collapse;
            background-color: #fff;
            border-radius: 8px;
            overflow: hidden;
        }

        th, td {
            padding: 12px 20px;
            text-align: center;
            border: 1px solid #ddd;
        }

        th {
            background-color: #4CAF50;
            color: white;
        }

        td img {
            width: 100px;
            height: auto;
            border-radius: 5px;
        }

        tr:hover {
            background-color: #f1f1f1;
        }

        /* Buttons Styling */
        button {
            padding: 8px 16px;
            margin: 5px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #45a049;
        }

        a {
            text-decoration: none;
            color: white;
        }

        /* Back to Home Button */
        .back-button {
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #2196F3;
            color: white;
            border-radius: 5px;
            text-decoration: none;
        }

        .back-button:hover {
            background-color: #1976D2;
        }

        /* Success, Update and Deleted Messages */
        .message {
            font-size: 1.2rem;
            margin: 20px 0;
            color: #fff;
            padding: 10px;
            border-radius: 5px;
        }

        .success {
            background-color: #4CAF50;
        }

        .update {
            background-color: #4CAF50;
        }

        .deleted {
            background-color: #f44336;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            table {
                width: 90%;
            }

            button {
                padding: 6px 12px;
                font-size: 0.9rem;
            }

            .back-button {
                padding: 8px 16px;
                font-size: 1rem;
            }

            .message {
                font-size: 1rem;
            }
        }
        /* end Data List */
        /* General Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            color: #333;
            padding: 40px;
            text-align: center;
        }

        a {
            text-decoration: none;
            color: #fff;
            background-color: #4CAF50;
            padding: 12px 20px;
            border-radius: 5px;
            font-size: 1.2rem;
            transition: background-color 0.3s ease;
        }

        a:hover {
            background-color: #45a049;
        }

        a:focus {
            outline: none;
        }

    </style>
</head>
<body>
    <div style="text-align:left; margin-bottom:20px">
        <a href="{{ route('form') }}">Go</a>
    </div>


    @if (session('success'))
        <div class="message success">
            <h1>{{ session('success') }}</h1>
        </div>
    @endif
    @if (session('deleted'))
        <div class="message deleted">
            <h1>{{ session('deleted') }}</h1>
        </div>
    @endif
    @if (session('update'))
        <div class="message update">
            <h1>{{ session('update') }}</h1>
        </div>
    @endif


    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Phone</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($datas as $data)
            <tr>
                <td>{{ $data->id }}</td>
                <td>{{ $data->name }}</td>
                <td>{{ $data->phone }}</td>
                <td><img src="images/{{ $data->image }}" alt="Image of {{ $data->name }}"></td>
                <td>
                    <a href="{{ route('edit', $data->id) }}"><button>Edit</button></a>
                    <a href="{{ route('delete', $data->id) }}"><button>Delete</button></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>


</body>
</html>
