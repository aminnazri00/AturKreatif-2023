FROM python:3.9

WORKDIR /app

ENV APP_HOME=/app
ENV APP_USER=appuser

RUN groupadd -r $APP_USER && \
    useradd -r -g $APP_USER -d $APP_HOME -s /sbin/nologin -c "Docker image user" $APP_USER

COPY ./requirements.txt /app/requirements.txt

RUN pip install --no-cache-dir --upgrade -r /app/requirements.txt

COPY ./personal_portfolio /app/

# RUN chown -R $APP_USER:$APP_USER $APP_HOME
# RUN chown -R www-data:www-data /app
USER $APP_USER

CMD [ "python", "manage.py", "runserver", "0.0.0.0:8000" ]