# Apache2, PHP, MySQL Install and configurations

## Install software
#### `sudo apt-get update && sudo apt-get upgrade`
#### `sudo apt-get install -y apache2 mysql-server mysql-common mysql-client php php-cli php-curl php-gd`
#### `sudo apt update && sudo apt dist-upgrade && sudo apt autoremove && sudo apt autoclean`

## Now check apache is available or not in firewall
#### `sudo ufw app list`

##  Remove software
#### `sudo apt-get remove --purge apache2*`
#### `sudo apt-get remove --purge mysql-server mysql-common mysql-client`
#### `sudo apt update && sudo apt dist-upgrade && sudo apt autoremove && sudo apt autoclean`

## You can check apache port number
#### `sudo vi /etc/apache2/ports.conf`


## Now fix `not found the requested URL` or `Not working PHP code` using the following steps:

#### `sudo gedit /etc/apache2/apache2.conf`
or
#### `sudo vi /etc/apache2/apache2.conf`

## Find '/var/www' and just add '/html`as follows:
`<Directory /var/www/html/>
leave other things as usual...
</Directory>`


## If you need to add any file or extension
#### `sudo vi /etc/apache2/mods-enabled/dir.conf`

## Enable permission:
#### `sudo chown -R dev:www-data /var/www/html/`
#### `sudo chmod -R 777 /var/www/html/`

## Then run below two commands:
#### `sudo a2enmod rewrite`
#### `sudo service apache2 restart`

## If still not work then run the below command see the log and search google
#### `sudo vi /var/log/apache2/error.log`

# PhpMyadmin Install and Configure (Not recommended instead use mysql workbench)
#### `sudo apt-get install -y phpmyadmin`

## If phpmyadmin do not work then follow the below instructon:
#### `sudo gedit /etc/apache2/apache2.conf`
or
#### `sudo vi /etc/apache2/apache2.conf`

## Then add the following line to the end of the file:
#### `Include /etc/phpmyadmin/apache.conf`

# MySQL Workbench Install and Configure
## First install mysql workbench through either commandline
#### `sudo apt install mysql-workbench`

Or, download and install by clicking from here https://dev.mysql.com/downloads/workbench/

#### Now, for credential do the following:
#### `sudo mysql -u root -p`

## Create a user named "admin" (whatever you like) and password "my_any_password" (whatever you like) and use that to connect in mysql-workbench.

#### `CREATE USER 'admin'@'localhost' IDENTIFIED BY 'password';`

#### `GRANT ALL PRIVILEGES ON *.* TO 'admin'@'localhost' WITH GRANT OPTION;`
#### `quit;`

#### Ref:
https://askubuntu.com/questions/773446/unable-to-connect-via-mysql-workbench-to-localhost-in-ubuntu-16-04-passwordless
http://w3public.com/full-article/how-to-reset-forgotten-password-phpmyadmin-in-ubuntu

## Related commands
#### `service mysql status`
#### `systemctl status mysql.service`
#### `sudo service mysql start`
#### `service apache2 status`
#### `sudo systemctl status apache2`
#### `sudo systemctl start apache2`
#### `sudo systemctl enable apache2`
#### `sudo apache2ctl restart`
#### `sudo systemctl restart apache2`
#### `sudo service apache2 restart`