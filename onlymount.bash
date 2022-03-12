#!/bin/bash
sudo yum update -y
sudo yum install -y nfs-utils 
mkdir -p /var/www/html
sudo mount -t nfs4 -o nfsvers=4.1,rsize=1048576,wsize=1048576,hard,timeo=600,retrans=2,noresvport fs-065292e330c574115.efs.eu-central-1.amazonaws.com:/ /var/www/html
