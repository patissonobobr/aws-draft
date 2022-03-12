#!/bin/bash
sudo su
yum update -y
yum install -y httpd php-mysqlnd

amazon-linux-extras install -y php7.4
amazon-linux-extras enable php7.4

sed -i '/<Directory "\/var\/www\/html">/,/<\/Directory>/ s/AllowOverride None/AllowOverride all/' /etc/httpd/conf/httpd.conf

wget https://wordpress.org/latest.tar.gz
tar -xzf latest.tar.gz
cp -r wordpress/* /var/www/html/


# Change permission of /var/www/html/
chown -R ec2-user:apache /var/www/html
chmod -R 774 /var/www/html

systemctl enable  httpd.service
systemctl restart httpd.service

