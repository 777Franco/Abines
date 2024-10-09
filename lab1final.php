

<html lang="en">

<head>

  <meta charset="UTF-8">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Laboratory Activity 1</title>

</head>

<body>

  

<form method="post" action="">

  <h1> Philippine General Hospital </h1>

  <table border="1">

    <!-- Row1 -->

    <tr>

      <td>Patient Name</td>

      <td><input type="text" name="pname" /></td>

    </tr>

    <!-- Row2 -->

    <tr>

      <td>Gender</td>

      <td>

        <select name="gender" >

          <option value="Male">Male</option>

          <option value="Female">Female</option>

        </select>

      </td>

    </tr>

    <!-- Row3 -->

    <tr>

      <td>Age</td>

      <td><input type="number" name="age" min="0" /></td>

    </tr>
	
    <!-- Row4 -->

    <tr>

      <td>Number of Days</td>

      <td><input type="number" name="days" min="1" /></td>

    </tr>

    <!-- Row5 -->

    <tr>

      <td>Initial Deposit</td>

      <td><input type="number" name="deposit" min="0" step="0.01" r /></td>

    </tr>

  </table>

  <br />

  <input type="submit" name="SUBMIT" value="Submit" />

</form>



<?php

  $pname = $_POST["pname"];

  $gender = $_POST["gender"];

  $age = $_POST["age"];

  $days = $_POST["days"];

  $deposit = $_POST["deposit"];


  // price for gender

  $basicPrice = ($gender == "Male") ? 150.00 : 8.5;

  // compute total amount

  $totalAmount = $basicPrice * $days;


  // discount based on age

  if ($age < 7) {

    $discount = 0.10 * $totalAmount;

  } elseif ($age >= 7 && $age < 18) {

    $discount = 0.075 * $totalAmount;

  } elseif ($age >= 18 && $age < 30) {

    $discount = 0.0525 * $totalAmount;

  } elseif ($age >= 30 && $age < 60) {

    $discount = 0.03 * $totalAmount;

  } elseif ($age >= 60 && $age < 80) {

    $discount = 0.0675 * $totalAmount;

  } else {

    $discount = 0.08 * $totalAmount;

  }



  // Calculate net amount and balance

  $netAmount = $totalAmount - $discount;

  $balance = $netAmount - $deposit;



  // Output results

  echo "<h2>Transaction Details</h2>";

  echo "Patient Name: $pname<br>";

  echo "Gender: $gender<br>";

  echo "Age: $age<br>";

  echo "Number of Days: $days<br>";

  echo "Initial Deposit: $deposit<br>";

  echo "Basic Price: $basicPrice<br>";

  echo "Total Amount: $totalAmount<br>";

  echo "Discount: $discount<br>";

  echo "Net Amount: $netAmount<br>";

  echo "Balance: $balance";



?>



</body>

</html>

