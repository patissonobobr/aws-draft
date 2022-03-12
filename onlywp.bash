#!/bin/bash
sudo su
yum update -y
yum install -y httpd nfs-utils php-mysqlnd mysql

sudo mount -t nfs4 -o nfsvers=4.1,rsize=1048576,wsize=1048576,hard,timeo=600,retrans=2,noresvport fs-0a02582413d3d9ca9.efs.eu-central-1.amazonaws.com:/ /var/www/html

amazon-linux-extras install -y php7.4
amazon-linux-extras enable php7.4

sed -i '/<Directory "\/var\/www\/html">/,/<\/Directory>/ s/AllowOverride None/AllowOverride all/' /etc/httpd/conf/httpd.conf

wget https://wordpress.org/latest.tar.gz
tar -xzf latest.tar.gz
cp -r wordpress/* /var/www/html/


# Change permission of /var/www/html/
chown -R ec2-user:apache /var/www/html
chmod -R 774 /var/www/html

systemctl enable httpd.service
systemctl restart httpd.service

########
sudo yum install -y mysql
export MYSQL_HOST=mydatabase-myvpc.cvugaezhor0e.eu-central-1.rds.amazonaws.com
mysql --user=admin --password=Mypassword! mydatabase --execute="GRANT ALL PRIVILEGES ON mydatabase.* TO admin; FLUSH PRIVILEGES;"

2CtTf(3tsZgp