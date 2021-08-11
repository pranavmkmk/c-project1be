FROM ubuntu:20.04
RUN apt update
RUN apt list --upgradable
RUN apt install nginx -y
RUN apt install php-fpm php-mysql -y
ADD api /var/www/html/
ADD defu /etc/nginx/sites-available
CMD ["/bin/bash", "-c", "/usr/sbin/service php7.4-fpm start && nginx -g 'daemon off;'"]
