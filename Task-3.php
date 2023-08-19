<?php

class Employee {
  private  $employee_id;
  private  $employee_name;
  private  $employee_salary;
  
    public function __construct($employee_id, $employee_name,$employee_salary) {
        $this->employee_id = $employee_id;
        $this->employee_name = $employee_name;
        $this->employee_salary = $employee_salary;
    }
    
    public function getEmployeeId() {
        return $this->employee_id;
    }

    public function getEmployeeName() {
        return $this->employee_name;
    }

    public function getEmployeeSalary() {
        return $this->employee_salary;
    }

    public function setEmployeeId($employee_id) {
        $this->employee_id = $employee_id;
    }
    
    public function setEmployeeName($employee_name) {
        $this->employee_name = $employee_name;
    }
    
    public function setEmployeeSalary($employee_salary) {
        $this->employee_salary = $employee_salary;
    }
}

// Create a Employee object

$employee = new Employee("01","Md. Towhidul Islam","20000");

// Access and display the Employee Id, Employee Name and Employee Salary
echo "Employee Id: " . $employee->getEmployeeId() . "\n";
echo "Employee Name: " . $employee->getEmployeeName() . "\n";
echo "Employee Salary: " . $employee->getEmployeeSalary() . "\n";

echo "\n";

// Update the year using the setEmployeeId(),setEmployeeName(),setEmployeeSalary() method
$employee->setEmployeeId(10);
$employee->setEmployeeName("Md. Atikul Islam");
$employee->setEmployeeSalary(35000);
// Display the updated Id,Name and Salary
echo "Update Employee Id: " . $employee->getEmployeeId() . "\n";
echo "Update Employee Name: " . $employee->getEmployeeName() . "\n";
echo "Update Employee Salary: " . $employee->getEmployeeSalary() .
"\n";
?>