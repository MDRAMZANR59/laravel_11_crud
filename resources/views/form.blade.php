<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
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

        h3 {
            color: #4CAF50;
            margin-bottom: 30px;
            font-size: 1.8rem;
        }

        /* Form Styling */
        form {
            background-color: #fff;
            border-radius: 8px;
            padding: 20px;
            max-width: 500px;
            margin: 0 auto;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .form-label {
            font-size: 1rem;
            margin-bottom: 8px;
            text-align: left;
            display: block;
        }

        .form-control {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            border-radius: 5px;
            border: 1px solid #ddd;
            font-size: 1rem;
        }

        .form-control:focus {
            border-color: #4CAF50;
            outline: none;
        }

        .form-text {
            text-align: left;
            font-size: 1rem;
            margin-bottom: 8px;
            display: block;
        }

        button {
            background-color: #4CAF50;
            color: white;
            padding: 12px 20px;
            font-size: 1.1rem;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #45a049;
        }

        .text-red {
            color: #f44336;
            font-size: 0.9rem;
            margin-top: 5px;
            text-align: left;
            margin-bottom: 10px;
            margin-left: 1px
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            h3 {
                font-size: 1.5rem;
            }

            .form-control {
                padding: 10px;
            }
        }
    </style>
</head>
<body>

    <h3>Submit Data</h3>

    <form action="{{ route('datastore') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-12">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name')}}" placeholder="Name">
            @error('name')
                <p class="text-red">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-12">
            <label for="phone" class="form-text">Phone</label>
            <input type="text" name="phone" class="form-control" id="phone" value="{{ old('phone') }}" placeholder="Phone">
            @error('phone')
                <p class="text-red">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-12">
            <label for="image" class="form-text">Image</label>
            <input type="file" name="image" class="form-control" id="image">
            @error('image')
            <p class="text-red">{{ $message }}</p>
        @enderror
        </div>

        <button type="submit">Submit</button>
    </form>

</body>
</html>
