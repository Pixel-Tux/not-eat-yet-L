<h1 align="center" style="color:#FF6600">NotEatYetL</h1>

### About NotEatYetL

NotEatYetL intended to be a copy, developed in Laravel, of the academic project [Not-eat-yet]((https://github.com/laura960/not-eat-yet)).
First realised in 2020 using Java as the final project of a Java course offer by [Generation Italy](https://italy.generation.org/).
The original project can de find on github and was created by [laura960](https://github.com/laura960).
### Instaling the project
#### Cloning the project
To clone this project you can run:
```shell
git clone [url]
```
#### Publishing Sail's .yml
After the project has been cloned, you may run the sail:install Artisan command. This command will publish Sail's docker-compose.yml file to the
root of your application:
```shell
php artisan sail:install
```
#### Configuring A Bash Alias
Instead of repeatedly typing `vendor/bin/sail` to execute Sail commands, you may wish to configure a Bash alias that allows you to execute
Sail's commands more easily:
```shell
sudo -s alias sail='[ -f sail ] && bash sail || bash vendor/bin/sail'
```

#### Starting & Stopping Sail
Before starting Sail, you should ensure that no other web servers or databases are running on your local computer. To start all of the
Docker containers defined in your application's `docker-compose.yml` file, you should execute the `up` command:
```shell
sail up
```
To start all of the Docker containers in the background, you may start Sail in "detached" mode:
```shell
sail up -d
```
To stop all of the containers, you may simply press Control + C to stop the container's execution. Or, if the containers are running in
the background, you may use the `stop` command:
```shell
sail stop
```
