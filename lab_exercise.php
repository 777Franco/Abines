<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab Exercises</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        
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

        /* Card glowing effect */
        .card {
            border: none;
            box-shadow: 0 0 10px rgba(0, 255, 255, 0.3);
            transition: box-shadow 0.3s ease, transform 0.3s ease;
        }

        .card:hover {
            box-shadow: 0 0 20px rgba(0, 255, 255, 0.7);
            transform: scale(1.05);
        }

        .card-title {
            font-size: 1.5rem;
            color: cyan;
            text-shadow: 0 0 5px rgba(0, 255, 255, 0.8);
        }

        .card-text {
            color: #bbbbbb;
        }

        /* Glowing button hover effect */
        .btn-primary {
            background-color: #17a2b8;
            border: none;
            transition: all 0.3s ease;
            box-shadow: 0 0 5px #17a2b8, 0 0 25px #17a2b8, 0 0 50px #17a2b8;
        }

        .btn-primary:hover {
            background-color: cyan;
            box-shadow: 0 0 10px cyan, 0 0 30px cyan, 0 0 60px cyan;
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

    </style>
</head>

<body>
    <!-- Include the navigation bar -->
    <?php include 'navbar.php'; ?>

    <div class="container mt-5">
        <h2 class="text-center" style="color: cyan; text-shadow: 0 0 10px cyan;">Lab Exercises</h2>

        
        <div class="row">
            <!-- First Column -->
            <div class="col-md-6">
                <div class="row">
                    <!-- Lab 1 Card -->
                    <div class="col-md-12">
                        <div class="card mb-4">
                            <div class="card-body">
                                <h5 class="card-title">Lab 1: Philippine General Hospital</h5>
                                <p class="card-text">Generating a report that contains the transaction details.</p>
                                <a href="lab1final.php" class="btn btn-primary">Go to Laboratory 1</a>
                            </div>
                        </div>
                    </div>

                    <!-- Lab 2 Card -->
                    <div class="col-md-12">
                        <div class="card mb-4">
                            <div class="card-body">
                                <h5 class="card-title">Lab 2: Multiplication Table</h5>
                                <p class="card-text">Creating a PHP program that displays the table.</p>
                                <a href="ABINESLAB2.php" class="btn btn-primary">Go to Laboratory 2</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Second Column -->
            <div class="col-md-6">
                <div class="row">
                    <!-- Lab 3 Card -->
                    <div class="col-md-12">
                        <div class="card mb-4">
                            <div class="card-body">
                                <h5 class="card-title">Lab 3: Tuition Fee Calculation</h5>
                                <p class="card-text">Creating Adamson University online registration that includes tuition fee bill calculation.</p>
                                <a href="lab3.php" class="btn btn-primary">Go to Laboratory 3</a>
                            </div>
                        </div>
                    </div>

                    <!-- Lab 4 Card -->
                    <div class="col-md-12">
                        <div class="card mb-4">
                            <div class="card-body">
                                <h5 class="card-title">Lab 4: Horizon Fitness Centre</h5>
                                <p class="card-text">Creating Fitness bill calculation.</p>
                                <a href="bill.php" class="btn btn-primary">Go to Laboratory 4-Midterm</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- End of row -->
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
