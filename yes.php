<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <style>
        /* Center align the form */
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        form {
            width: 400px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            background-color: #f9f9f9;
        }
        /* Style for form inputs */
        input[type="text"], select {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        /* Style for submit button */
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin-top: 10px;
            border: none;
            border-radius: 5px;
            background-color: #4CAF50;
            color: white;
            cursor: pointer;
        }
        /* Style for services checkboxes */
        .services {
            margin-top: 10px;
        }
        .services label {
            margin-right: 10px;
        }
    </style>
</head>
<body>

<div class="container">
    <form action="submit.php" method="POST">
        <label for="username">Name:</label>
        <input type="text" id="username" name="username" required><br>

        <label for="age">Age:</label>
        <input type="text" id="age" name="age" required><br>

        <label for="address1">Address Line 1:</label>
        <input type="text" id="address1" name="address1" required><br>

        <label for="address2">Address Line 2:</label>
        <input type="text" id="address2" name="address2"><br>

        <label for="services">Select Services:</label><br>
        <div class="services">
            <input type="checkbox" id="apple" name="services[]" value="Apple">
            <label for="apple">Apple</label>
            <input type="checkbox" id="banana" name="services[]" value="Banana">
            <label for="banana">Banana</label>
            <input type="checkbox" id="guava" name="services[]" value="Guava">
            <label for="guava">Guava</label>
            <input type="checkbox" id="mango" name="services[]" value="Mango">
            <label for="mango">Mango</label>
        </div>

        <input type="submit" value="Submit">
    </form>
</div>

</body>
</html>
