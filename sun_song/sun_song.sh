#!/bin/bash

sun=$(curl -s 'https://api.sunrise-sunset.org/json?lat=48.813875&lng=2.392521')
sunr=$(echo $sun | cut -c 24-33)
suns=$(echo $sun | cut -c 46-55)

echo 'Sunrise is expected at '$sunr' and sunset at '$suns'.'
