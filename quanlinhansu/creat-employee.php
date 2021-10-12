
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
        }

        * {
            box-sizing: border-box;
        }

        input[type=text], [type=date], select, textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-top: 6px;
            margin-bottom: 16px;
            resize: vertical;
        }

        input[type=submit] {
            background-color: #04AA6D;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type=submit]:hover {
            background-color: #45a049;
        }

        .container {
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 20px;
        }
    </style>
</head>
<body>

<h3>Contact Form</h3>

<div class="container">

    <form method="post">
        <label for="firstname">First Name</label>
        <input type="text" id="firstname" name="firstname" placeholder="Your name..">

        <label for="lastname">Last Name</label>
        <input type="text" id="lastname" name="lastname" placeholder="Your name..">

        <label for="birthdate">Birth Date</label>
        <input type="date" id="birthdate" name="birthdate" placeholder="Your name..">

        <label for="address">Address</label>
        <input type="text" id="address" name="address" placeholder="Your name..">

        <label for="thanhpho">Thanh Pho</label>
        <select id="thanhpho" name="thanhpho">
            <option value="australia">Ha Noi</option>
            <option value="canada">Ha Nam</option>
            <option value="usa">Ha Tinh</option>
        </select>

        <input type="submit" value="Submit">
        <a href="index.php">Back</a>
    </form>
</div>


</body>
</html>
<?php
include "models/Employee.php";
include "services/EmployeeManager.php";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $employee = [
        "firstName" => $_REQUEST["firstname"],
        "lastName" => $_REQUEST["lastname"],
        "birthDate" => $_REQUEST["birthdate"],
        "address" => $_REQUEST["address"],
        "jobTitle" => $_REQUEST["job"]
    ];

    $employeeManager = new EmployeeManager();
    $employeeManager->storeEmployees($employee);
    header("Location:index.php");
}
?>