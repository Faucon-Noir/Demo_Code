#!/bin/bash

first_line=0

if [[ $1 = '--list' ]];then
    
    while IFS=';' read -r id name description quest_type completion_state quest_giver; do
	if [[ $first_line -ne 0 ]]; then
	    echo "#$id $name"
	else 
	    first_line=1
	fi
    done < $2
fi
