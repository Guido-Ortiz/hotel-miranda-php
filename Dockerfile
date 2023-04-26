# FROM mattrayner/lamp:latest-2004-php8

# # Your custom commands
# COPY ./css ./css
# COPY ./js ./js
# COPY ./resources ./resources
# COPY ./scss ./scss
# COPY ./views ./views

# EXPOSE 3000

# CMD ["/run.sh"]

FROM php:8.2-apache
RUN docker-php-ext-install mysqli