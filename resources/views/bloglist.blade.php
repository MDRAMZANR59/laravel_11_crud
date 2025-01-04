<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Blog List</title>
    <style>
        body {
            background-color: #f4f6f9;
            font-family: 'Arial', sans-serif;
        }

        .blog-card {
            border: none;
            border-radius: 12px;
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.1);
            background-color: #fff;
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            margin-bottom: 30px;
            position: relative;
        }

        .blog-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.15);
        }

        .blog-image {
            width: 100%;
            height: 261px;
            object-fit: cover;
            border-radius: 12px;
        }

        .blog-title {
            font-size: 1.75rem;
            font-weight: bold;
            color: #333;
            margin-top: 15px;
        }

        .blog-description {
            font-size: 1rem;
            color: #555;
            margin-top: 10px;
            line-height: 1.6;
            height: 90px;
            overflow: hidden;
        }

        /* Enhanced Read More Button */
        .btn-read-more {
            font-size: 1rem;
            color: #fff;
            background: linear-gradient(45deg, #d4c8c7, #ece8e6);
            border: none;
            padding: 12px 20px;
            border-radius: 30px;
            position: absolute;
            bottom: 20px;
            left: 20px;
            display: inline-block;
            text-transform: uppercase;
            font-weight: bold;
            letter-spacing: 1px;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
            cursor: pointer;
            transition: background 0.3s ease, transform 0.3s ease, box-shadow 0.3s ease;
        }

        /* Hover Effects */
        .btn-read-more:hover {
            background: linear-gradient(45deg, #ff8e53, #ff6f61);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
            transform: translateY(-5px);
        }

        /* Hover transition for the blog title */
        .blog-card:hover .blog-title {
            color: #007bff;
        }

        .container {
            margin-top: 40px;
        }

        .row {
            display: flex;
            justify-content: center;
            gap: 30px;
        }

        .col-md-4 {
            flex: 1 1 30%;
            height: 420px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        @media (max-width: 768px) {
            .col-md-4 {
                flex: 1 1 100%;
            }
        }

    </style>
</head>
<body>

    <div class="container">
        <div class="row">
            @foreach ($blogs as $blog)
            <div class="col-md-4">
                <div class="blog-card">
                    <img src="images/{{ $blog->image }}" class="blog-image" alt="{{ $blog->name }}">
                    <h4 class="blog-title">{{ $blog->name }}</h4>
                    <p class="blog-description">{{ $blog->description }}</p>
                    <a href="{{ route('blogdetails') }}" class="btn-read-more">Read More</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
