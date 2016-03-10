# adminplus-boilerplate-laravel

---

## Running with Docker

Docker runs any app, anywhere and allows you to package an application with all of its dependencies into a standardized unit for development and compose your application from microservices, without worrying about inconsistencies between development and production environments. Learn more about [Docker](https://www.docker.com)

### 1. Setup docker

> The easiest way to get started with docker is by using `docker-machine` and `docker-compose`. The rest of this guide assumes you already have them installed.

#### Create a docker machine

```bash    
docker-machine create dev
```
    
#### Start the docker machine

```bash
docker-machine start dev
```

#### Setup environment

> Point the local `docker` client to run commands against the `dev` docker machine:

```bash
eval "$(docker-machine env dev)"
```

### 2. Mounting the host directory

> This step is required if you need to be able to change the source code and see its effect on the application in real time in the running docker container.

#### docker-compose.yml

> Update the volumes path from `docker-compose.yml` to reflect your local OS username and project name:

**For OS X**:

```yaml
volumes:
  - /Users/<YOUR USERNAME>/docker/<YOUR PROJECT NAME>:/app/www
```

> If you are using Docker Machine on Mac or Windows, your Docker daemon has only limited access to your OS X or Windows filesystem. Docker Machine tries to auto-share your /Users (OS X) or C:\Users (Windows) directory. 

**For Windows**:

```yaml
volumes:
  - /c/Users/<YOUR USERNAME>/docker/<YOUR PROJECT NAME>:/app/www
```

### 2. Start docker container

> From the root directory of this repository:

```bash
docker-compose up -d
```

### 3. Attach to the running container

> The previous command should start a container i.e. `myproject_web_1` but the name could be different. You can verify with `docker ps`. Assuming it's `myproject_web_1`:

```bash
docker exec -it myproject_web_1 bash
```

---

## Laravel documentation

Documentation for the Laravel framework can be found on the [Laravel website](http://laravel.com/docs).