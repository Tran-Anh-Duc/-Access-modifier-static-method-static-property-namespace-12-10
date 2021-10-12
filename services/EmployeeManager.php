<?php
include "../models/Employee.php";
class EmployeeManager
{
    private $employees;
    private $path=__DIR__."/employee.json";

    public function __construct()
    {
        $this->employees = [];
    }

    //hien thi danh sach nhan su

    public function getAllEmployees()
    {
        return $this->employees;
    }

    //them nhan su moi

    public function storeEmployees($employee)
    {
    array_push($this->employees,$employee);
    }
    
    
    //lu du lieu vao db
    public function save()
    {
        $dataJson = json_encode($this->employees);
        file_put_contents($dataJson);
    }

    public function load()
    {
        $dataJson = file_get_contents($this->path);
        $data=json_decode($dataJson,true);

    }

    public function convertToObject($data)
    {
        $employees = [];
        foreach ($data as $e){
            $employee = new Employee($e["firstName"],$e["lastName"],$e["birthDate"],$e["address"],$e["jobTitle"]);
            $employees[] = $employee; /// array_push
        }
        $this->showLog($data);
        return$employees;
    }

    public function showLog($data)
    {
        echo "<pre>";
        var_dump($data);
        die();
    }

}
