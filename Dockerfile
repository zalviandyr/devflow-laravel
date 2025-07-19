FROM node:alpine AS build
WORKDIR /app

COPY . .

RUN npm install
RUN npm run build

FROM jkaninda/nginx-php-fpm:8.1

COPY . /var/www/html
COPY .env.docker .env
COPY --from=build /app/public/build /var/www/html/public/build

RUN composer install --no-dev --optimize-autoloader
RUN php artisan key:generate

# Fix permissions
RUN chown -R www-data:www-data /var/www/html
USER www-data
