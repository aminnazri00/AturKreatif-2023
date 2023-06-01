# 
# COPY ./requirements.txt /app/requirements.txt

# RUN pip install --no-cache-dir --upgrade -r /app/requirements.txt

# COPY ./personal_portfolio /app/

# RUN chown -R $APP_USER:$APP_USER $APP_HOME
# RUN chown -R www-data:www-data /app
# USER $APP_USER

# CMD [ "python", "manage.py", "runserver", "0.0.0.0:8000" ]


FROM php:7.4-apache

# Copy the web application files to the container
# COPY . /var/www/html/


# # Install any required dependencies
# RUN docker-php-ext-install mysqli
# RUN set -ex; \
#     apt-get update; \
#     apt-get install -y --no-install-recommends \
#     mariadb-client

# # Expose port 80 for the web server
# EXPOSE 80

# # Start Apache in the foreground
# CMD ["apache2-foreground"]
# FROM lfi_i
WORKDIR /var/www/html
RUN apt-get update -y && apt-get install -y libmariadb-dev
RUN useradd -ms /bin/bash kiddo
RUN echo 'kiddo:detective1conan123!' | chpasswd
USER kiddo
# RUN sed -i 's|/bin/sh|/bin/bash|' /etc/passwd
RUN touch /home/kiddo/.bash_history && chown kiddo:kiddo /home/kiddo/.bash_history
RUN echo ' "47urkr347if{history_is_information}<br> Memory is part of your identity.” — David Miliband' >> /home/kiddo/.bash_history
# RUN echo 'HISTFILE=/home/kiddo/.bash_history' >> /home/kiddo/.bashrc
# RUN echo 'HISTSIZE=1000' >> /home/kiddo/.bashrc
# RUN echo 'HISTFILESIZE=2000' >> /home/kiddo/.bashrc
# RUN echo 'HISTTIMEFORMAT="%Y-%m-%d %H:%M:%S "' >> /home/kiddo/.bashrc