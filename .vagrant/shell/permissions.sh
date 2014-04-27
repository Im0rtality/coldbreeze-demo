#!/bin/bash
sudo apt-get install acl
mkdir -p /var/www/app/cache
mkdir -p /var/www/app/logs
mkdir -p /var/www/web/media
sudo chmod -R 0777 /var/www
APACHEUSER='www-data'
sudo setfacl -R -m u:"$APACHEUSER":rwX -m u:`whoami`:rwX /var/www/app/cache /var/www/app/logs /var/www/web/media
sudo setfacl -dR -m u:"$APACHEUSER":rwX -m u:`whoami`:rwX /var/www/app/cache /var/www/app/logs /var/www/web/media
sudo chown -R vagrant /usr/local
