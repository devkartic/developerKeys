### 1. What is Normalization ?
    Normalization is a database design technique which organizes tables in a manner that reduces redundancy and dependency of data.
    It divides larger tables to smaller tables and links them using relationships.`

### 2. What is a KEY ?
    A KEY is a value used to identify a record in a table uniquely. A KEY could be a single column or combination of multiple columns
    Note: Columns in a table that are NOT used to identify a record uniquely are called non-key columns.

### 3. What is a Primary Key?
    
    A primary is a single column value used to identify a database record uniquely.
    It has following attributes
    A primary key cannot be NULL
    A primary key value must be unique
    The primary key values should rarely be changed
    The primary key must be given a value when a new record is inserted.

### 4. What is Composite Key ?
A composite key is a primary key composed of multiple columns used to identify a record uniquely

    In our database, we have two people with the same name Robert Phil, but they live in different places.

    Hence, we require both Full Name and Address to identify a record uniquely. That is a composite key.