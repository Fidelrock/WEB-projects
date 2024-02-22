<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assessment Records</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        table,
        th,
        td {
            border: 1px solid #ddd;
        }

        th,
        td {
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        input[type="text"] {
            width: 60px;
        }

        input[type="submit"] {
            padding: 8px 15px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>

    <h2>Assessment Records for ACSC 327</h2>

    <form action="process_scores.php" method="post">
        <table>
            <tr>
                <th>Student ID</th>
                <th>CAT Score</th>
                <th>Exam Score</th>
            </tr>
            <?php
            // Assuming Mr. Joe has five students in his class
            $students = array("Student1", "Student2", "Student3", "Student4", "Student5");

            foreach ($students as $student) {
                echo "<tr>";
                echo "<td>{$student}</td>";
                echo "<td><input type='text' name='cat_scores[]' required></td>";
                echo "<td><input type='text' name='exam_scores[]' required></td>";
                echo "</tr>";
            }
            ?>
        </table>

        <br>
        <input type="submit" value="Submit Scores">
    </form>

</body>

</html>