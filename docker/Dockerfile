FROM php:8.0.2-fpm
LABEL key="Yuri Oliveira"
RUN apt-get update && apt-get install -y \
  git \
  curl \
  zip \
  unzip 
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
EXPOSE 8000
WORKDIR /var/www
CMD [ "composer install" ]