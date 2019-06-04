FROM phusion/baseimage

ENV username tsctf
ENV password tsctf
ENV rootpassword tsctftsctf
ENV mysqlpassword tsctftsctf

COPY flag /

ADD html/ /var/www/html/


RUN rm -f /etc/service/sshd/down &&\
    sed -ri 's/^#?PermitRootLogin\s+.*/PermitRootLogin yes/' /etc/ssh/sshd_config &&\
    mv /var/www/html/sources.list /etc/apt/ &&\
    export DEBIAN_FRONTEND=noninteractive &&\
    apt-get update && \
    apt-get -q -y install nano libapache2-mod-php mysql-server php-mysqli && \
    rm -rf /var/lib/apt/lists/* &&\
    service mysql start &&\
    mysqladmin -uroot password $mysqlpassword &&\
    mysql -uroot -p$mysqlpassword < /var/www/html/data.sql &&\
    useradd $username -s /bin/bash &&\
    mkdir -p /home/$username &&\
    echo root:$rootpassword | chpasswd &&\
    echo $username:$password | chpasswd &&\
    chown -R $username:$username /home/$username &&\
    chown -R $username:www-data /var/www/html/ &&\
    chmod -R g+w /var/www/html/ &&\
    usermod -a -G www-data $username &&\
    usermod -a -G www-data www-data &&\
    mv /var/www/html/entrypoint.sh /etc/my_init.d/ &&\
    mv /var/www/html/php.ini /etc/php/7.0/apache2/ &&\
    chmod u+x /etc/my_init.d/entrypoint.sh

WORKDIR /var/www/html
EXPOSE 22
EXPOSE 80
