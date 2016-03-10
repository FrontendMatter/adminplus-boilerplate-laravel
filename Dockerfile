FROM lazabogdan/laravel:latest

# install git
RUN apt-get update && \
	apt-get install -y git && \
	/usr/local/bin/composer self-update

# add app files
COPY . /app/www

RUN composer install

VOLUME ["/app/www"]