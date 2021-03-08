HPH=$((hph-5))
HPB=$((hpb-15))#!/bin/bash

ans=oui
hpb=30
hph=60
#Fonction Sleep and clear#
slc() {
    sleep 1.5 && clear
}
#Fonction Stat Hero#
sh() {
    echo "Link        HP: $HPH /60  STR/DMG: 15"
}
#Fonction Ennemy Attacked#
enma() {
    echo "Bokoblin    HP: $HPB /30  STR/DMG: 5"
}
#Fonction Display Stat#
ds() {
    enma
    sh
}
#Fonction Attaque#

#Fonction Heal#
clear
echo "Navi: Tu es prêt ?"
read Answer
clear
if [[ $Answer = "$ans" ]]; then
    echo 'Navi: Dans ce cas, allons y.'
else
    exit
fi
slc && clear && echo "Boss: Tu aimes mon chateau ? Alors viens me chercher !"
slc && echo "Navi: Je sais où il est, suis moi !"
slc && echo '===Fight' $(fnum 0) '==='

echo "Navi: voici ton premier adversaire, les codes de mon peuples m'interdisent de combattre. Je t'aiderai en te montrant les stats de ton adversaire et les actions que tu peux faire"


echo '---Options---'

echo '1 Attack    2 Heal'
read Answer
clear
if [ $Answer = "Attack" ]; then
    echo 'Link inflige 15 dégats au Bokoblin'
    HPH=$((hph-5))
    HPB=$((hpb-15))
    ds

else
    if [ $Answer = "Heal" ]; then
	echo 'Gain de 30 HP'
	HPH=$((hph+25))
	HPB=$((hpb+0))
	ds
    fi
fi

