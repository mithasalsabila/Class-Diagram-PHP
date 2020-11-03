<?php

$objEmployee = new Employee("SQA Engineer Intern", 0);
$objEmployee->setEmployeeName("Nadia Paramitha Salsabila");
echo "== EMPLOYEE ==";
echo "<br>";
echo "Name : " . $objEmployee->getEmployeeProfile();
echo "<br>";
echo "Title : " . $objEmployee->getEmployeeTitle();
echo "<br>";
echo "Salary : " . $objEmployee->getEmployeeMonthlySalary($day);


class Company{
    public $name;

    public function setCompanyName($name){
        $this->name = $name;
    }

    public function getCompanyName(){
        return $this->name;
    }
}

class Department extends Company{
    public $name;

    public function setDepartmentName($name){
        $this->name = $name;
    }

    public function getDepartmentName(){
        return $this->name;
    }
}

class Employee extends Department{
    public $name,
    	   $title,
           $salary;

    public function __construct($title, $salary){
        $this->title = $title;
        $this->salary = $salary;
    } 

    public function setEmployeeName($name){
    	$this->name = $name;
    }

    public function getEmployeeTitle(){
        return $this->title;
    }

    public function getEmployeeProfile(){
        return $this->name;
    }

    public function getEmployeeMonthlySalary($day){
        return $this->salary;
    }
}

?>