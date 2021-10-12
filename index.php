<?php
include "models/Employee.php";
include "services/EmployeeManager.php";

$employeeManager = new EmployeeManager();
$employee1 =new Employee("tran","anh ducA","23/07/1996","ha noi","hocvienA");
$employee2 =new Employee("tran","anh ducB","24/08/1997","ha noi","hocvienB");
$employee3 =new Employee("tran","anh ducC","25/09/1998","ha noi","hocvienC");

$employeeManager->storeEmployees($employee1);
$employeeManager->storeEmployees($employee2);
$employeeManager->storeEmployees($employee3);

echo "<pre>";
print_r($employeeManager->getAllEmployees());