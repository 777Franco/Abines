<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course Portfolio</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
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

        /* Glowing effect on hover for navigation */
        .nav-link::before {
            content: '';
            position: absolute;
            width: 100%;
            height: 3px;
            bottom: 0;
            left: 0;
            background-color: cyan;
            visibility: hidden;
            transform: scaleX(0);
            transition: all 0.3s ease-in-out;
        }

        .nav-link:hover::before {
            visibility: visible;
            transform: scaleX(1);
        }

        /* Glowing button hover effect */
        .btn-glow {
            display: inline-block;
            background-color: #17a2b8;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 25px;
            text-transform: uppercase;
            box-shadow: 0 0 5px #17a2b8, 0 0 25px #17a2b8, 0 0 50px #17a2b8, 0 0 200px #17a2b8;
            transition: all 0.4s ease;
        }

        .btn-glow:hover {
            box-shadow: 0 0 10px cyan, 0 0 30px cyan, 0 0 60px cyan, 0 0 200px cyan;
        }

        /* Jumbotron styling with a subtle glow */
        .jumbotron {
            background: rgba(0, 0, 0, 0.8);
            color: white;
            padding: 2rem;
            border-radius: 20px;
            box-shadow: 0 0 15px rgba(255, 255, 255, 0.6);
        }

        .jumbotron h1 {
            font-size: 3rem;
            text-shadow: 0 0 10px cyan, 0 0 20px cyan;
        }

        .jumbotron p.lead {
            font-size: 1.5rem;
            color: #bbbbbb;
            text-shadow: 0 0 5px rgba(255, 255, 255, 0.8);
        }

        /* Course objectives glowing effect on hover */
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
          
        .footer {
            background-color: #BCF2F6;
            color: #10375C;
            padding: 15px;
            text-align: center;
            margin-top: 20px;
            position: relative;
            bottom: 0;
            width: 100%;
        }
        .footer p {
            margin: 5px 0;
            font-weight:bold;
        }
        .footer a {
            color: cyan;
            text-decoration: none;
        }


    </style>
</head>

<body>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Applications Development and Emerging Technologies Laboratory</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="lab_exercise.php">Lab Exercises</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="resources.php">Resources</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="instructor.php">Instructor</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container mt-5">
        <div class="jumbotron text-center">
            <h1 class="display-4">Welcome to the Course!</h1>
            <p class="lead">This course provides opportunity for students for students to learn new approach in the creation of
web pages using server side scripting language. It provides introduction to dynamic and interactive tools
and methods in web development. It also focuses on the use of PHP and MySQLi in the creation of
interactive and dynamic webpages with database applications</p>
            <hr class="my-4">
            <p>Course Objectives:</p>
            <ul>
                <li>Understand HTML, CSS, JavaScript, and PHP.</li>
                <li>Build responsive and user-friendly websites.</li>
                <li>Work with databases and backend logic.</li>
            </ul>
            <a href="https://www.adamson.edu.ph/v1/" class="btn-glow">Get Started</a>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <div class="footer">
    <p> 2024 HANNAH ABINES. All Rights Reserved.</p>
    <p>COURSE: APPLICATION DEVELOPMENT | Phone: +912 942 7697</p>
</body>

</html>
