<?php
include "models/Employee.php";
include "services/EmployeeManager.php";

$employeeManager = new EmployeeManager();
//$employee1 =new Employee("tran","anh ducA","23/07/1996","ha noi","hocvienA");
//$employee2 =new Employee("tran","anh ducB","24/08/1997","ha noi","hocvienB");
//$employee3 =new Employee("tran","anh ducC","25/09/1998","ha noi","hocvienC");
//
//$employeeManager->storeEmployees($employee1);
//$employeeManager->storeEmployees($employee2);
//$employeeManager->storeEmployees($employee3);


$employees = $employeeManager->getAllEmployees();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Danh sach nhan vien</title>
</head>
<body>
<a href="creat-employee.php"><button>AddEmployee</button></a>
<table border="1px">
    <thead>
    <tr>
        <th>STT</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>BirthDate</th>
        <th>Address</th>
        <th>Job Title</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($employees as $key => $employee): ?>
        <tr>
            <td><?php echo $key + 1 ?></td>
            <td><?php echo $employee->getFirstName() ?></td>
            <td><?php echo $employee->getLastName() ?></td>
            <td><?php echo $employee->getBirthDate() ?></td>
            <td><?php echo $employee->getAddress() ?></td>
            <td><?php echo $employee->getJobTitle() ?></td>
            <td>
                <a href="employee-detail.php?id=<?php echo $key ?>">Detail</a>
            </td>
            <td>
                <a onclick="return confirm('ban co muon xoa khong')" href="ddelete-employee.php?id=<?php echo $key ?>">delete</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
</body>
</html>
