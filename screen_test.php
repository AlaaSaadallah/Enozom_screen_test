<?php
include('connection.php');

$employee_query = mysqli_query($conn, 'SELECT employees.first_name as `first_name` FROM employees LEFT JOIN salaries ON employees.emp_no = salaries.emp_no WHERE salaries.salary = (SELECT MAX(salary) FROM salaries)');

$employee_result = mysqli_fetch_array($employee_query);

echo "Employee Name:" . $employee_result['first_name'];

$salaries_query = mysqli_query($conn, 'SELECT sum(salary)as `total_salaries` from salaries');
$salaries_result = mysqli_fetch_array($salaries_query);

echo "<br> Total salaries value: " . $salaries_result['total_salaries'];
