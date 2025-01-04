<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        /* Basic Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            background-color: #f0f4f8;
            color: #333;
            line-height: 1.6;
        }

        /* Header Style */
        header {
            background-color: #4CAF50;
            color: #fff;
            padding: 20px 0;
            text-align: center;
        }

        header h2 {
            font-size: 2rem;
            font-weight: 600;
        }

        /* Main Container */
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        /* Card Design */
        .card {
            background-color: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

        .card h3 {
            font-size: 1.8rem;
            color: #333;
            margin-bottom: 10px;
        }

        .card p {
            font-size: 1.2rem;
            color: #555;
        }

        .button {
            display: inline-block;
            padding: 12px 20px;
            background-color: #4CAF50;
            color: #fff;
            border-radius: 5px;
            text-decoration: none;
            font-size: 1rem;
            transition: background-color 0.3s ease;
        }

        .button:hover {
            background-color: #45a049;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .card {
                padding: 20px;
            }

            header h2 {
                font-size: 1.5rem;
            }
        }
    </style>
</head>
<body>

    <header>
        <h2>Dashboard</h2>
    </header>

    <div class="container">
        <div class="card">
            <h3>Welcome to Your Dashboard</h3>
            <p>You're successfully logged in! Enjoy your stay and explore the features of the application.</p>
            <a href="#" class="button">Explore Now</a>
        </div>
    </div>

</body>
</html>
