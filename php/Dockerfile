ARG PHP_VERSION=""
FROM php:${PHP_VERSION:+${PHP_VERSION}-}fpm-alpine

RUN apk update; \
    apk upgrade;


# Install MCrypt
RUN apk update; \
    apk install -y libmcrypt; \
    docker-php-ext-install mcrypt;

# Install Intl
RUN apk update; \
    apk install -y libicu; \
    docker-php-ext-install intl;

# Install Mysql
RUN docker-php-ext-install mysqli pdo_mysql;

# Install Composer
#RUN curl -sS https://getcomposer.org/installer | php \
#    mv composer.phar /usr/local/bin/composer;

# Install mbstring
RUN docker-php-ext-install mbstring;

# Install soap
#RUN apk update; \
#    apk install -y libxml2-dev; \
#    docker-php-ext-install soap;

# Install opcache
RUN docker-php-ext-install opcache;

# Install PHP zip extension
RUN docker-php-ext-install zip;

# Install Git
RUN apk update; \
    apk install -y git;

# Install xsl
#RUN apk update; \
#    apk install -y libxslt-dev; \
#    docker-php-ext-install xsl;

# Define PHP_TIMEZONE env variable
#ENV PHP_TIMEZONE UTC

# Configure Apache Document Root
#ENV APACHE_DOC_ROOT /var/www/html

# Enable Apache mod_rewrite
RUN a2enmod rewrite;


########################################################################################################################

# Start!
# COPY ./start /usr/local/bin/
# CMD ["start"]
