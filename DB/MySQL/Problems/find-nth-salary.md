### Find nth  highest salary in mysql (10 rows, execution time 3.3 ms)

>#### SELECT salary FROM employees e1 where n-1 = (Select count(DISTINCT Salary) FROM employees e2 where e2.`salary` > e1.`salary`);

### Find nth highest salary in mysql (10 rows, execution time 1.8 ms)

>#### SELECT salary FROM employees ORDER BY salary DESC LIMIT n-1, 1;