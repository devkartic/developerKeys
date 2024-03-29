### 1. What is a Database Trigger ?

    A database trigger is special stored procedure that is run when specific actions occur within a database.
    Most triggers are defined to run when changes are made to a table’s data.  Triggers can be defined to
    run instead of or after DML (Data Manipulation Language) actions such as INSERT, UPDATE, and DELETE.
    
    Triggers help the database designer ensure certain actions, such as maintaining an audit file, are
    completed regardless of which program or user makes changes to the data.
    
    The programs are called triggers since an event, such as adding a record to a table, fires their execution.
    
    Triggers and their implementations are specific to database vendors.  In this article we’ll focus
    on Microsoft SQL server; however, the concepts are the same or similar in Oracle and MySQL.
    
    Note: All the examples for this lesson are based on Microsoft SQL Server Management Studio and
    the AdventureWorks2012 database.  You can get started using these free tools