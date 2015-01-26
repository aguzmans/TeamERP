#!/bin/sh

sudo php app/console cache:clear
sudo php app/console assets:install web
sudo php app/console assetic:dump web

# chown www-data:www-data app/cache/ -R
# chown www-data:www-data app/logs/ -R

sudo chown www-data:www-data app/cache/ -R
sudo chown www-data:www-data app/logs/ -R
sudo chown abel:abel web/bundles/ -R
