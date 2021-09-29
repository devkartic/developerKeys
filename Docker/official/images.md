## What is images ?

#### Answer : Docker images are templates to create docker containers. Containers is a running instance of images.

## General commands for images :

#### `docker images --help`
#### `docker pull image`
#### `docker images`
#### `docker images -q`

## A dangling image is one that is not tagged and is not reference by any container

#### `docker images -f"dangling=false"`
#### `docker images -f"dangling=false" -q`

#### `docker run image`
#### `docker rmi image`
#### `docker rmi -f image`

#### `docker inspect`

## Ubuntu images

#### `sudo docker run ubuntu`
#### `docker run --name Myubuntu1 -it ubuntu bash`
#### `ls`
