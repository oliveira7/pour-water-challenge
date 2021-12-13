FROM php:7.2-fpm
LABEL key="Yuri Oliveira"
COPY . /var/www
WORKDIR /var/www
RUN apt-get update && apt-get install -y \
  git \
  curl \
  zip \
  unzip 
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN composer update

# COPY /docker/script.sh /var/www/script.sh
# RUN chmod +x /var/www/script.sh
# CMD [ "/var/www/script.sh" ]