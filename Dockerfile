# Gunakan official PHP image dengan Apache
FROM php:8.2-apache

# Salin file PHP ke direktori web
COPY . /var/www/html/

# (Opsional) Tambahkan ekstensi PHP jika diperlukan
# RUN docker-php-ext-install mysqli pdo pdo_mysql

# Ganti port Apache ke 7860
RUN sed -i 's/80/7860/g' /etc/apache2/ports.conf /etc/apache2/sites-available/000-default.conf

# Expose port 7860 (supaya bisa diakses dari luar container)
EXPOSE 7860

# Jalankan Apache
CMD ["apache2-foreground"]
