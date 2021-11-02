
### For Doc Link : [Document view](https://www.youtube.com/watch?v=HubezKbFL7E)

## What is an indexing ?

    An Index is an ordered representation of the indexed data.

    Indexing is defined as a data structure technique which allows you to quickly retrieve records from a database file. It is based on
    the same attributes on which the Indices has been done.

    An index    
    Takes a search key as input
    Efficiently returns a collection of matching records.
    An Index is a small table having only two columns. The first column comprises a copy of the primary or
    candidate key of a table. Its second column contains a set of pointers for holding the address of the
    disk block where that specific key value stored.

### B-Tree : Balance search
### Binary Search

## For create Index: 

### `create index index_name on table_name(column_name);`

### `create index idx_user_id on posts(user_id);`

## For Drop Index:

### MS Access: `DROP INDEX index_name ON table_name;`

### SQL Server: `DROP INDEX table_name.index_name;`

### DB2/Oracle: `DROP INDEX index_name; `
    
### MySQL: `ALTER TABLE table_name DROP INDEX index_name;`

