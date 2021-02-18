#!/bin/bash

fnum=1
ans=oui
HPB=30
HPH=60
HPBF=150
#Fonction Sleep and clear#
slc() {
    sleep 0.5 && clear
}
#Fonction Stat Hero#
sh() {
    echo "Link        HP: $HPH/60  STR/DMG: 15"
}
#Fonction Ennemy Attacked#
enma() {
    echo "Bokoblin    HP: $HPB/30  STR/DMG: 5"
}
#Fonction Boss Stat#
bs() {
    echo "Boss        HP :$HPBF/150  STR/DMG: 20"
}
#Fonction Display Stat#
ds() {
    enma
    sh
}
# Fonction Boucle Combat#
bc() {
    while [[ $fnum -lt 10 ]]; do
	while [[ $HPH -ne 0 ]] && [[ $HPB -ne 0 ]]; do
	    slc && echo "=== Fight $fnum ==="
	    ds
	    echo "
	
---Options---

1 Attack    2 Heal"
	    read Answer
	    clear && echo "=== Fight $fnum ==="
	    ds
	    if [ $Answer = "Attack" ]; then
		echo "
Link inflige 15 dégats au Bokoblin

Le Bokoblin inflige 5 dégats à Link"
		HPH=$((HPH-5))
		HPB=$((HPB-15))
	    else
		if [ $Answer = "Heal" ]; then  
		    echo "
Gain de 30 HP"	
		    HPH=$((HPH+25))
		    HPB=$((HPB+0))
		    if [[ $HPH -gt 60 ]]; then
			HPH=60
			HPH=$((HPH-5))
			echo "
Link est full life" 
		    fi
		    echo "
Le Bokoblin inflige 5 dégats à Link"
		fi
	    fi
	done
	fnum=$((fnum+1))
	HPB=$((HPB+30))
    done
}
#Fonction Boucle Boss Fight#
bbf() {
    slc && echo "Bravo petit héro, tu as vaincu 9 de mes gardes ! Maintenant viens te battre contre moi, qui suis fort comme 4 Bokoblin et résistant comme 5"
    slc && echo "Navi: Attention Link ! C'est Ganon le Fléau, qu'on appelle aussi L'Ombre du Chateau d'Hyrule"
    while [[ $HPH -ne 0 ]] && [[ $HPBF -ne 0 ]]; do
	slc && echo "=== BOSS FIGHT ==="
	bs && sh
	echo "
	               
---Options---	
		
 Attack    2 Heal"
	read Answer
	clear && echo "=== BOSS FIGHT  ==="
	if [ $Answer = "Attack" ]; then
            echo 'Link inflige 15 dégats à Ganon'
            HPH=$((HPH-20))
            HPBF=$((HPBF-15))
            bs && sh
	else
            if [ $Answer = "Heal" ]; then
		echo 'Gain de 30 HP'
		HPH=$((HPH+10))
		if [[ $HPH -gt 60 ]]; then
                    HPH=60
                    echo "Link est full life"
		fi
		ds
            fi
	fi
    done
}

clear
echo "Navi: Tu es prêt ?"
read Answer
if [[ $Answer = "$ans" ]]; then
    clear
    echo 'Navi: Dans ce cas, allons y.'
else
    exit
fi
slc && echo "Boss: Tu aimes mon chateau ? Alors viens me chercher !"
slc && echo "Navi: Je sais où il est, suis moi !"
slc && echo "Navi: Voici ton premier adversaire, les codes de mon peuples m'interdisent de combattre."
echo "Je t'aiderai en te montrant les stats de ton adversaire et les actions que tu peux faire"
