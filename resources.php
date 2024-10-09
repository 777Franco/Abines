<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resources</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Change the background to a dark gray */
        body {
            background-color: #1a1a1a;
            color: #fff;
        }

        /* Glowing navigation bar */
        nav.navbar {
            box-shadow: 0 0 15px rgba(0, 255, 255, 0.7);
        }

        /* Navbar link hover effect */
        .nav-link {
            position: relative;
            color: #ffffff;
            text-transform: uppercase;
            font-weight: bold;
            transition: color 0.3s ease;
        }

        .nav-link:hover {
            color: cyan;
        }

        /* Glowing effect on hover for buttons */
        .btn-primary {
            background-color: #00ffff;
            border: none;
            box-shadow: 0 0 10px #00ffff;
            color: #000;
        }

        .btn-primary:hover {
            background-color: #00cccc;
            box-shadow: 0 0 20px #00ffff;
            transition: 0.3s ease;
        }

        /* Glowing card titles */
        .card-title {
            color: #00ffff;
            font-weight: bold;
            text-shadow: 0 0 10px #00ffff;
        }

        /* Glowing card container effect */
        .card {
            background-color: #333333;
            border-radius: 15px;
            box-shadow: 0 0 10px rgba(0, 255, 255, 0.7);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 0 20px rgba(0, 255, 255, 0.9);
        }
        ul li {
            font-size: 1.2rem;
            color: #00ffff;
            margin-bottom: 10px;
            transition: color 0.3s ease, transform 0.3s ease;
        }

        ul li:hover {
            color: #ffffff;
            transform: scale(1.05);
            text-shadow: 0 0 10px cyan, 0 0 20px cyan;
        }
    </style>
</head>
<body>
    <?php include 'navbar.php'; ?>
    <div class="container mt-5">
        <h2>Course Resources</h2>
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Textbook</h5>
                        <h6 class="card-title">C SHARP TUTORIAL</h6>
                        <a href="csharp.pdf" class="btn btn-primary" download>Download</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Article</h5>
                        <h6 class="card-title">E-COMMERCE</h6>
                        <a href="E-COMMERCE.pdf" class="btn btn-primary" download>Download</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
