# استخدام PHP 8.4 مع Apache لـ Laravel 10
FROM php:8.4-apache

LABEL maintainer="badr.bechtioui@gmail.com"

# تثبيت extensions PHP اللازمة لـ Laravel
RUN apt-get update && apt-get install -y --fix-missing \
    mariadb-client \
    imagemagick \
    graphviz \
    git \
    libpng-dev \
    libonig-dev \
    libjpeg62-turbo-dev \
    libmcrypt-dev \
    libxml2-dev \
    libxslt1-dev \
    wget \
    linux-libc-dev \
    libyaml-dev \
    libzip-dev \
    libicu-dev \
    libpq-dev \
    libssl-dev \
    unzip \
    curl && \
    rm -r /var/lib/apt/lists/*

# تكوين وتثبيت PHP extensions
RUN docker-php-ext-configure gd --with-jpeg=/usr/include/

RUN docker-php-ext-install \
    mysqli \
    pdo_mysql \
    gd \
    mbstring \
    xsl \
    opcache \
    calendar \
    intl \
    exif \
    ftp \
    bcmath \
    zip \
    sockets

# تثبيت Composer
RUN cd /usr/src && \
    curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/bin --filename=composer

# تثبيت Node.js و npm لـ Laravel Mix/Vite (اختياري)
RUN curl -fsSL https://deb.nodesource.com/setup_18.x | bash - && \
    apt-get install -y nodejs

# تثبيت Xdebug (معطل افتراضياً - يمكن تفعيله عند الحاجة)
#RUN pecl install xdebug && \
#    docker-php-ext-enable xdebug

########## زيادة إعدادات PHP
RUN echo "upload_max_filesize = 500M\n" \
    "post_max_size = 500M\n" \
    "memory_limit = 1024M\n" \
    >> /usr/local/etc/php/conf.d/maxsize.ini

RUN echo 'max_execution_time = 300' >> /usr/local/etc/php/conf.d/maxexectime.ini

########## إعدادات APACHE

# تفعيل Apache modules لـ Laravel
RUN a2enmod rewrite headers expires deflate

# إضافة virtual host configuration
COPY ./local/default.conf /etc/apache2/sites-available/000-default.conf

# إضافة Laravel Artisan alias
RUN echo '#!/bin/bash\nphp /var/www/html/artisan "$@"' > /usr/bin/artisan && \
    chmod +x /usr/bin/artisan

# إضافة alias للـ Laravel commands الشائعة
RUN echo '#!/bin/bash\nphp /var/www/html/artisan "$@"' > /usr/bin/laravel && \
    chmod +x /usr/bin/laravel

# تكوين الصلاحيات
RUN usermod -u 1000 www-data
RUN chmod -R 775 /var/www
RUN chown -R www-data:www-data /var/www
RUN chown -R www-data:www-data /usr/local/etc/php

# إنشاء directory للـ Laravel storage و bootstrap/cache
RUN mkdir -p /var/www/html/storage/logs && \
    mkdir -p /var/www/html/storage/framework/cache && \
    mkdir -p /var/www/html/storage/framework/sessions && \
    mkdir -p /var/www/html/storage/framework/views && \
    mkdir -p /var/www/html/bootstrap/cache && \
    chown -R www-data:www-data /var/www/html/storage && \
    chown -R www-data:www-data /var/www/html/bootstrap/cache

USER www-data
WORKDIR /var/www/html
VOLUME /var/www/html