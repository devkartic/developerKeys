## For access server by SSH

#### `ssh [username]@[hostname or ip address]`

## For access mysql server (If using default host and port)

#### `mysql -u [username] -p`

## For access mysql server (If not using default host and port)

#### `mysql -h [hostname] -p [portnumber] -u [username] -p`

## Create Database

#### `CREATE DATABASE [DB_NAME];`

## Show Database

#### `SHOW DATABASES;`

## Import Database

#### `mysql -u [username] -p [DB_NAME] < [DB_NAME].sql`

## Export Database

#### `mysqldump -u [username] -p [DB_NAME] > [DB_NAME].sql`