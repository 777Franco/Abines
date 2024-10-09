<!DOCTYPE html>
<html>
<head>
    <title>LABORATORY ACTIVITY 2</title>

    
    <style>
    /* css */
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            flex-direction: column;
            font-family: Arial, sans-serif;
            background-color: #f0f8ff;
        }

        h2 {
            text-align: center;
            font-size: 30px;
        }

        form {
            text-align: center;
            margin-bottom: 20px;
        }

        label {
            font-size: 18px;
        }

        input[type="number"] {
            width: 50px;
            padding: 5px;
            border-radius: 8px;
            border: 1px solid #aaa;
            text-align: center;
            font-size: 16px;
            outline: none;
            margin-left: 10px;
        }

        input[type="submit"] {
            padding: 8px 16px;
            border-radius: 8px;
            background-color: #4CAF50;
            color: white;
            font-size: 16px;
            border: none;
            cursor: pointer;
        }

        
        table {
            border-collapse: collapse;
            margin-top: 20px;
            background-color: #f9f9f9;
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
        }

        td {
            border: 1px solid #ddd;
            padding: 15px;
            text-align: center;
            font-size: 18px;
            font-weight: bold;
        }

       
        tr:nth-child(odd) td {
            background-color: #ffe5b4; /* Light orange */
        }

        tr:nth-child(even) td {
            background-color: #add8e6; /* Light blue */
        }

        tr:hover td {
            background-color: #f08080; /* Light coral when hovered */
            color: white;
        }
    </style>
</head>

<body>
    
    <h2>Multiplication Table</h2>
    <form method="post" action="">
        <label>Number of rows:</label>
        <input type="number" name="rows" value=" ">
        <br><br>
        <label>Number of columns:</label>
        <input type="number" name="cols" value=" ">
        <br><br>
        <input type="submit" name="submit" value="SUBMIT">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $rows = $_POST['rows'];
        $cols = $_POST['cols'];
        
        echo "<table>";
        for ($i = 1; $i <= $rows; $i++) {
            echo "<tr>";
            for ($j = 1; $j <= $cols; $j++) {
                echo "<td>" . ($i * $j) . "</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    }
    ?>
</body>
</html>
