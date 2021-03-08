#!/bin/bash
HPH=50

if [[ $HPH -gt 60 ]]; then
    echo $((HPH+70))
else
    echo $HPH
fi

