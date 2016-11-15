#!/bin/bash
source ./mysql.env

docker exec larapache php artisan migrate:refresh --seed

