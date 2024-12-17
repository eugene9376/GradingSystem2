<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grading System</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 350;
            text-align: center;
        }
        h1 {
            font-size: 24px;
            margin-bottom: 10px;
            color: Blue;
        }
        input[type="number"] {
            width: 90%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }
        button {
            padding: 10px 20px;
            background-color: red;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }
        button:hover {
            background-color: blue;
        }
        .result {
            margin-top: 20px;
            font-size: 18px;
            color: black;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Grading System</h1>
        <form method="post">
            <input type="number" name="grade" placeholder="Enter grade (0-100)" required>
            <button type="submit">Submit</button>
        </form>
        <div class="result">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $grade = $_POST["grade"];
                if (!is_numeric($grade) || $grade < 0 || $grade > 100) {
                    echo "Error: Invalid grade. Please enter a grade between 0 and 100.";
                } else {
                    if ($grade >= 95) {
                        echo "The grade is $grade, and the university grade is 1.0 (Excellent).";
                    } elseif ($grade >= 90) {
                        echo "The grade is $grade, and the university grade is 1.25 (Very Good).";
                    } elseif ($grade >= 85) {
                        echo "The grade is $grade, and the university grade is 1.5 (Good).";
                    } elseif ($grade >= 80) {
                        echo "The grade is $grade, and the university grade is 1.75 (Above Average).";
                    } elseif ($grade >= 75) {
                        echo "The grade is $grade, and the university grade is 2.0 (Average).";
                    } elseif ($grade >= 70) {
                        echo "The grade is $grade, and the university grade is 2.25.";
                    } elseif ($grade >= 65) {
                        echo "The grade is $grade, and the university grade is 2.5.";
                    } elseif ($grade >= 60) {
                        echo "The grade is $grade, and the university grade is 3.0.";
                    } else {
                        echo "The grade is $grade, which is a Fail and converts to a university grade of 5.0.";
                    }
                }
            }
            ?>
        </div>
    </div>
</body>
</html>
