# Find nth salary in mysql

SELECT salary
FROM employees e1
where n-1 = (Select count(DISTINCT Salary)  FROM employees e2 where e2.`salary` > e1.`salary`);