FROM rscafi/web-app

RUN addgroup www-data root

RUN apt-get update \
    && \
    apt-get install -y libsqlite3-dev nodejs-legacy \
    && \
    docker-php-ext-install pdo_sqlite
