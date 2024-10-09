<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Horizon Fitness Centre Registration</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url("gym.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            margin: 0;
            padding: 0;
        }
        
        .header {
            background-color: #e28400;
            color: white;
            padding: 15px;
            text-align: center;
        }
        .header h1 {
            margin: 0;
            
        }
        .header nav {
            margin-top: 10px;
        }
        .header nav a {
            color: white;
            text-decoration: none;
            margin: 0 15px;
            font-weight: bold;
            font-size: 20px;
        }

        
        .footer {
            background-color: #333;
            color: white;
            padding: 15px;
            text-align: center;
            margin-top: 20px;
            position: relative;
            bottom: 0;
            width: 100%;
        }
        .footer p {
            margin: 5px 0;
        }
        .footer a {
            color: #4CAF50;
            text-decoration: none;
        }

    
        .container {
            width: 50%;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
            color: #333;
        }
        form {
            display: flex;
            flex-direction: column;
        }
        label {
            margin: 10px 0 5px;
            font-weight: bold;
        }
        input, select {
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            margin-bottom: 15px;
        }
        input[type="submit"] {
            background-color: #ffe988;
            color: black;
            font-weight:bold;
            border: none;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #b75606;
        }
    </style>
</head>
<body>


<div class="header">
    <h1>Horizon Fitness Centre</h1>
    <nav>
        <a href="#">Home</a>
        <a href="#">About Us</a>
        <a href="#">Contact</a>
        <a href="#">Membership</a>
    </nav>
</div>


<div class="container">
    <h2>Register for Horizon Fitness Centre</h2>
    <form action="bill.php" method="POST">
        <label for="name">Full Name</label>
        <input type="text" id="name" name="name" required>

        <label for="facility">Select Facility</label>
        <select id="facility" name="facility" required>
            <option value="">--Select a Facility--</option>
            <option value="G">Gymnasium</option>
            <option value="CS">Cardio Solutions</option>
            <option value="PT">Personal Training</option>
            <option value="S">Swimming</option>
        </select>

        <label for="months">Number of Months</label>
        <input type="number" id="months" name="months" min="1" required>

        <input type="submit" value= "Calculate Fitness Fee ">
    </form>
</div>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>




<div class="footer">
    <p>&copy; 2024 Horizon Fitness Centre. All Rights Reserved.</p>
    <p>Contact us: <a href="https://www.adamson.edu.ph/2018/">info@horizonfitness.com</a> | Phone: +912 942 7697</p>
    <p>Follow us on:
        <a href="https://www.facebook.com/anette.daligcon">Facebook</a> | 
        <a href="https://www.facebook.com/AdU.IT.and.IS.Society">Instagram</a> | 
        <a href="https://www.facebook.com/profile.php?id=61566114474650">Twitter</a>
    </p>
</div>

</body>
</html>
