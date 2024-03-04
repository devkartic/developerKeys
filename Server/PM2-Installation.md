# JS App run by PM2 in Server:

`$ sudo pm2 start --name=itechorbit.com npm -- start`

## Automatically restart process when server restarts
`$ sudo pm2 startup systemd`

## Config save
`$ sudo pm2 save`

## Reload Process
`$ sudo pm2 reload [process id/name]`