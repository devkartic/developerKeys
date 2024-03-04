# SSL Certificate ADD to server:

## Install certbot
`$ sudo snap install certbot --classic`

## Update dependancy
`$ sudo apt update -y`

## Install  python3-certbot-nginx
`$ sudo apt install -y python3-certbot-nginx`

`sudo ufw allow 'Nginx Full’`

`sudo ufw delete allow 'Nginx HTTP'`

## SSL Apply
`$ sudo certbot --nginx -d itechorbit.com -d www.itechorbit.com`

`$ sudo certbot renew --dry-run`