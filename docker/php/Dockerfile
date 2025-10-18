FROM php:8.3-fpm

# Установка системных зависимостей
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    libzip-dev \
    zip \
    unzip \
    libpq-dev

# Очистка кэша
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Установка PHP расширений
RUN docker-php-ext-install \
    pdo_pgsql \
    pgsql \
    mbstring \
    exif \
    pcntl \
    bcmath \
    gd \
    zip

# Установка XDebug
RUN pecl install xdebug \
    && docker-php-ext-enable xdebug

# Копирование конфигурации XDebug
COPY xdebug.ini /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini

# Установка Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Создание пользователя для приложения
RUN groupadd -g 1000 www
RUN useradd -u 1000 -ms /bin/bash -g www www

# Копирование существующего приложения
COPY . /var/www/html

# Установка прав
COPY --chown=www:www . /var/www/html

# Переключаемся на пользователя www
USER www

# Рабочая директория
WORKDIR /var/www/html

EXPOSE 9000
CMD ["php-fpm"]
