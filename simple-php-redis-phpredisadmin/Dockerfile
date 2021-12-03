FROM php:8.0-apache
RUN apt-get update && apt-get upgrade -y
RUN \
  curl 'http://pecl.php.net/get/redis-5.3.4.tgz' -o /tmp/redis-5.3.4.tgz  \
  && cd /tmp \
  && pecl install redis-5.3.4.tgz \
  && rm -rf redis-5.3.4.tgz \
  && docker-php-ext-enable redis \


