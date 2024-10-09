<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adamson University Online Registration</title>
    <style>
       body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    padding: 20px;
    }

    header {
    text-align: center;
    margin-bottom: 20px;

    }

    form {
    max-width: 400px;
    margin: 0 auto;
    background: #fff;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    label {
    display: block;
    margin-bottom: 10px;
    }

    input, select {
    width: 100%;
    padding: 10px;
    margin-bottom: 20px;
    }

    input[type="submit"] {
    background-color: #007BFF;
    color: white;
    border: none;
    padding: 10px;
    cursor: pointer;

    }
 h1{
   color: #1e5d78;
   text-align:center;
}
p{
    text-align:center;
}
    footer {
    text-align: center;
    margin-top: 20px;
    }
    

    </style>
</head>
<body>
    <header>
        <h1>Adamson University Online Registration</h1>
    </header>

    <div class="container">
        <form action="lab3.php" method="POST">
            <div class="form-container">
                <label for="name">Student Name:</label>
                <input type="text" id="name" name="name" required>

                <label for="course">Select Course:</label>
                <select id="course" name="course" required>
                    <option value="IT">Information Technology</option>
                    <option value="CE">Civil Engineering</option>
                    <option value="ACC">Accountancy</option>
                    <option value="N">Nursing</option>
                </select>

                <label for="units">Number of Units:</label>
                <input type="number" id="units" name="units" min="1" required>

                <input type="submit" value="Calculate Fees">

            </div>
        </form>

        <?php 

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name=$_POST['name'];
            $course=$_POST['course'];
            $units=$_POST['units'];
            $lab_fee=2500;
            $tuition_rate_per_unit=0;

            switch($course){
                case 'IT':
                    $tuition_rate_per_unit= 1500.25;
                break;

                case 'CE':
                    $tuition_rate_per_unit=1000.75;
                break;

                case 'ACC':
                    $tuition_rate_per_unit=800.25;
                break;

                case 'N':
                    $tuition_rate_per_unit=1200.25; 
                    break;
                default:
                echo ("Invalid Input");
                exit();
            }
            

$tuition_fee = ($tuition_rate_per_unit * $units) + $lab_fee;


if ($tuition_fee > 10000) {

$down_payment = $tuition_fee * 0.25;

} else {

$down_payment = $tuition_fee * 0.10;

}

$remaining_balance = $tuition_fee - $down_payment;





echo "<h1>Tuition Fee Receipt</h1>";
echo "===============================================================================================================================================================================================";
echo "<p><b>Student Name:</b> $name</p>";

echo "<p><b>Course Code:</b> $course</p>";

echo "<p><b>Number of Units:</b> $units</p>";

echo "<p><b>Tuition Rate per Unit:</b> $tuition_rate_per_unit</p>";

echo "<p><b>Tuition Fee:</b> $tuition_fee</p>";

echo "<p><b>Down Payment:</b> $down_payment</p>";

echo "<p><b>Remaining

Balance:</b> $remaining_balance</p>";

}

?>
        
    <footer>
        <p>&copy; 2024 Adamson University.</p>
    </footer>
</body>
</html>
