<?php
include_once "../models/Employee.php";

class EmployeeManager
{
    private array $employees;
    private string $path = __DIR__ . "/employee.json";

    public function __construct()
    {
        $this->employees = $this->load();
    }

    //hien thi danh sach nhan su

    public function getAllEmployees(): array
    {
        return $this->employees;
    }

    //them nhan su moi

    public function storeEmployees($employee)
    {
        array_push($this->employees, $employee);

        $this->save();
    }

    // xem thong tin chi tiet tung nhan vien

    public function getEmployeeById($id)
    {
        return $this->employees[$id];
    }


    //lu du lieu vao db
    public function save()
    {
        $dataJson = json_encode($this->employees);
        file_put_contents($this->path, $dataJson);
    }

    public function load(): array
    {
        $dataJson = file_get_contents($this->path);
        $data = json_decode($dataJson, true);
        return $this->convertToObject($data);
    }

    public function convertToObject($data): array
    {
        $employees = [];
        foreach ($data as $e) {
            $employee = new Employee($e["firstName"], $e["lastName"], $e["birthDate"], $e["address"], $e["jobTitle"]);
            $employees[] = $employee; /// array_push
        }
        return $employees;
    }

    public function showLog($data)
    {
        echo "<pre>";
        var_dump($data);
        die();
    }

}
