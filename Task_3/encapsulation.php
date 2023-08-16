<?php

class Employee {
    private $name;
    private $salary;

    public function __construct($name, $salary) {
        $this->name = $name;
        $this->setSalary($salary);
    }

    public function getName() {
        return $this->name;
    }

    public function getSalary() {
        return $this->salary;
    }

    public function setSalary($salary) {
        if ($salary >= 0) {
            $this->salary = $salary;
        } else {
            throw new InvalidArgumentException("Salary must be a non-negative value.");
        }
    }
}


try {
    $employee = new Employee("Md. Fardin Khan", 50000);
    echo "Employee Name: " . $employee->getName();
    echo "<br>";
    echo "Employee Salary: $" . $employee->getSalary();
    echo "<br>";
    
    $employee->setSalary(-1000);
} catch (InvalidArgumentException $e) {
    echo "Error: " . $e->getMessage();
}


?>