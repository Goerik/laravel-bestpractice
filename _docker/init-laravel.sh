#!/bin/bash
source ./mysql.env

docker exec enrabota-cddrz-tools composer install
docker exec enrabota-cddrz-tools composer dumpautoload
docker exec enrabota-cddrz-tools php artisan config:cache
docker exec enrabota-cddrz-tools chmod -R 777 storage
docker exec enrabota-cddrz-tools chmod -R 777 bootstrap/cache


