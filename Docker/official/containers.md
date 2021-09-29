# images

## This command for view containers

#### `docker ps -a`
#### `docker container ls -a`

## This command first pull the images then run the images

#### `docker run hello-world `
#### `docker run ubuntu`

## This command run containers with new name and interactive mode

#### `docker run --name Myubuntu -it ubuntu`
OR
#### `docker exec -it container-id/name bash`

## Remove container

#### `sudo docker rm -f container-id or container-name`