# Gunakan image PHP 8.0 dengan versi yang sesuai (bisa disesuaikan dengan kebutuhan aplikasi Anda)
FROM php:8.0-cli

# Instal dependensi untuk OpenSSL 1.0 dan pustaka lainnya yang dibutuhkan
RUN apt-get update && apt-get install -y libssl1.0.0 libzip-dev git unzip

# Instal ekstensi PHP yang dibutuhkan
RUN docker-php-ext-install zip

# Salin semua file aplikasi ke dalam container
COPY . /var/www/html

# Tentukan direktori kerja
WORKDIR /var/www/html

# Install Composer (jika aplikasi Anda menggunakannya)
RUN curl -sS https://getcomposer.org/installer | php
RUN mv composer.phar /usr/local/bin/composer

# Install dependensi PHP dari file composer.json
RUN composer install --no-dev

# Expose port 8080, ini akan digunakan untuk akses aplikasi
EXPOSE 8080

# Tentukan perintah yang akan dijalankan saat container dijalankan
CMD ["php", "-S", "0.0.0.0:8080", "index.php"]
