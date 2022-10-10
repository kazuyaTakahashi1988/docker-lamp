FROM wordpress:5.8.1-php7.3-apache
RUN a2enmod rewrite
RUN apt-get update \
  && apt-get install -y libfreetype6-dev libjpeg62-turbo-dev libpng-dev \
  && docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/ \
  && docker-php-ext-install pdo_mysql mysqli mbstring gd iconv

COPY --from=composer:2.0 /usr/bin/composer /usr/bin/composer

RUN apt-get update  \
    && apt-get -y install \
    git \
    zip \
    unzip \
    vim \
    && docker-php-ext-install  bcmath 

# sendmailを使うためのインストール
RUN apt-get update \
 && apt-get install -y --no-install-recommends sendmail \
 && rm -rf /var/lib/apt/lists/*

RUN echo "sendmail_path=sendmail -t -i" >> /usr/local/etc/php/conf.d/sendmail.ini

RUN echo '#!/bin/bash' >> /usr/local/bin/docker-entrypoint-wrapper.sh \
 && echo 'set -euo pipefail' >> /usr/local/bin/docker-entrypoint-wrapper.sh

RUN echo 'echo "127.0.0.1 $(hostname) localhost localhost.localdomain" >> /etc/hosts' >> /usr/local/bin/docker-entrypoint-wrapper.sh

RUN echo 'service sendmail restart' >> /usr/local/bin/docker-entrypoint-wrapper.sh

RUN echo 'exec docker-entrypoint.sh "$@"' >> /usr/local/bin/docker-entrypoint-wrapper.sh \
 && chmod +x /usr/local/bin/docker-entrypoint-wrapper.sh

ENTRYPOINT ["docker-entrypoint-wrapper.sh"]
CMD ["apache2-foreground"]