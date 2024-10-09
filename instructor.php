<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instructor Information</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha384-k6RqeWeci5ZR/Lv4MR0sA0FfDOMnKj8Cg0zK4C9j4L6cck/5/1U98BElh3IH8N0" crossorigin="anonymous">
    <style>
        
        body {
            background-color: #1a1a1a;
            color: #fff;
        }

        nav.navbar {
            box-shadow: 0 0 15px rgba(0, 255, 255, 0.7);
        }

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

        .social-icon {
            color: #00ffff;
            font-size: 1.5rem;
            margin-right: 15px; 
            transition: color 0.3s ease, transform 0.3s ease;
        }

        .social-icon:hover {
            color: #00cccc;
            transform: scale(1.1);
        }

        .card-title {
            color: #00ffff;
            font-weight: bold;
            text-shadow: 0 0 10px #00ffff;
        }

        .media {
            display: flex;
            align-items: center;
            background-color: #333333;
            border-radius: 15px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 255, 255, 0.7);
        }

        .media:hover {
            box-shadow: 0 0 20px rgba(0, 255, 255, 0.9);
        }

        .media img {
            width: 120px; 
            height: 120px; 
            border-radius: 50%; 
            border: 2px solid #00ffff; 
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
        <h2>Instructor Information</h2>
        <div class="media">
            <img src="prof.png" class="mr-3" alt="Instructor">
            <div class="media-body">
                <h5 class="mt-0">Ms. Anette Temporal-Daligcon</h5>
                <p>Email: <a href="mailto:anette.daligcon.edu.ph" style="color: #00ffff;">anette.daligcon.edu.ph</a></p>
                <p>Lecture Schedule: Tuesday and Thursday, 4:00pm - 5:00pm</p>
                <p>Laboratory Schedule: Friday, 2:00pm - 5:00 pm</p>
                <div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>