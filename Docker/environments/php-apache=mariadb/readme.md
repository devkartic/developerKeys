## Dockerfile build and create an image:
#### `EX. docker build -t <image> (Class) .`
#### `$ docker build -t php-8.2-apache-mariadb .`


### Create container (-d for detached) from an image which created by docker file.
#### `docker run -d --name <container> (Object) <image> (Class)`

### Create container (-it --rm for interactive and rm container when terminal closed) from an image which created by docker file.
#### `docker run -it --rm --name <container> (Object) <image> (Class)`

## Create container from an image without docker file.

#### `$ docker run -d -p 80:80 --name <container> (object) -v "$PWD/<app-dir>":/var/www/html <image:tag> (class)`
#### `$ docker run -d -p 80:80 --name php-8.2-apache-mariadb -v "$PWD/src":/var/www/html php-8.2-apache-mariadb`

### Creating container and get interactive mode:
#### `$ docker run -it --name container-name image-repository:tag /bin/bash`

Get container interactive mode:
#### `$ docker exec -it <container> /bin/bash`