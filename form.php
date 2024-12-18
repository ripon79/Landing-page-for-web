<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Registration</title>
    <link rel="stylesheet" href="style.css">

    <style>
        /* Basic Styling */
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        form {
            margin-bottom: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid #ccc;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f4f4f4;
        }
    </style>
</head>
<body>
    <h1>Register NOW</h1>
    <!-- Student Registration Form -->
    <form method="POST" action="crud.php">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="age">Age:</label>
        <input type="number" id="age" name="age" min="18" max="50" required><br><br>

        <label for="gender">Gender:</label>
        <input type="radio" name="gender" value="Male" required> Male
        <input type="radio" name="gender" value="Female" required> Female
        <input type="radio" name="gender" value="Other" required> Other<br><br>

        <label for="address">Address:</label><br>
        <textarea id="address" name="address" rows="4" cols="50"></textarea><br><br>

        <button type="submit">Submit</button>
    </form>

    <h2>Student Records</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Age</th>
                <th>Gender</th>
                <th>Address</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Database connection
            $conn = new mysqli('localhost', 'root', '', 'student_db');

            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // Fetch student records
            $sql = "SELECT * FROM student";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // Output each record as a table row
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                        <td>{$row['id']}</td>
                        <td>{$row['name']}</td>
                        <td>{$row['email']}</td>
                        <td>{$row['age']}</td>
                        <td>{$row['gender']}</td>
                        <td>{$row['address']}</td>
                    </tr>";
                }
            } else {
                echo "<tr><td colspan='6'>No records found</td></tr>";
                echo "New Data added Successfully...";
            }

            // Close connection
            $conn->close();
            ?>
        </tbody>
        <script src="Script.js"></script>

    </table>
</body>
</html>
