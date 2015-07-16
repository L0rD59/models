FROM php:5.6-cli
MAINTAINER Johann Brocail <contact@johannbrocail.fr>

RUN docker-php-ext-configure pdo_mysql --with-pdo-mysql=mysqlnd && \
    docker-php-ext-install pdo_mysql

# Configurations
RUN ln -sf /usr/share/zoneinfo/Europe/Paris /etc/localtime

RUN echo "date.timezone = \"Europe/Paris\"" > /usr/local/etc/php/conf.d/timezone.ini

# Set working directory.
WORKDIR /app

# Default command
CMD ["-v"]

# Entrypoint
ENTRYPOINT ["php"]
