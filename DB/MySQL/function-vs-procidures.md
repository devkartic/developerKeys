## Difference between a stored procedure and function

### Benefits of Stored Procedures :

    Precompiled execution: SQL Server compiles each Stored Procedure once and then re utilizes the execution plan.
    This results in tremendous performance boosts when Stored Procedures are called repeatedly.
    
    Reduced client/server traffic: If network bandwidth is a concern in your environment then you'll be happy
    to learn that Stored Procedures can reduce long SQL queries to a single line that is transmitted over the wire.
    
    Efficient reuse of code and programming abstraction: Stored Procedures can be used by multiple users
    and client programs. If you utilize them in a planned manner then you'll find the development cycle requires less time.
    
    Enhanced security controls: You can grant users permission to execute a Stored Procedure independently
    of underlying table permissions.


### Benefits of User Defined Functions :

    They allow modular programming: You can create the function once, store it in the database, and call it
    any number of times in your program. User Defined Functions can be modified independently of the program source code.
    
    They allow faster execution: Similar to Stored Procedures, Transact-SQL User Defined Functions reduce
    the compilation cost of Transact-SQL code by caching the plans and reusing them for repeated executions.
    This means the user-defined function does not need to be reparsed and reoptimized with each use resulting
    in much faster execution times. CLR functions offer significant performance advantage over Transact-SQL
    functions for computational tasks, string manipulation, and business logic. Transact-SQL functions are
    better suited for data-access intensive logic.
    
    They can reduce network traffic: An operation that filters data based on some complex constraint that
    cannot be expressed in a single scalar expression can be expressed as a function. The function can then
    invoked in the WHERE clause to reduce the number or rows sent to the client.


### Functions :
    1. Function must return a value.
    2. Will allow only Select statements, it will not allow us to use DML statements.
    3. It will allow only input parameters, doesn't support output parameters.
    4. It will not allow us to use try-catch blocks.
    5. Transactions are not allowed within functions.
    6. We can use only table variables, it will not allow using temporary tables.
    7. Stored Procedures can't be called from a function.
    8. Functions can be called from a select statement.
    9. A UDF can be used in join clause as a result set.

### Procedure :
    1. Stored Procedure may or not return values.
    2. Can have select statements as well as DML statements such as insert, update, delete and so on
    3. It can have both input and output parameters.
    4. For exception handling we can use try catch blocks.
    5. Can use transactions within Stored Procedures.
    6. Can use both table variables as well as temporary table in it.
    7. Stored Procedures can call functions.
    8. Procedures can't be called from Select/Where/Having and so on statements. Execute/Exec statement can be used to call/execute Stored Procedure.
    9. Procedures can't be used in Join clause


