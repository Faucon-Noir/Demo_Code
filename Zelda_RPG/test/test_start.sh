#!/bin/bash
ans=yes
answ=yep
slc() {
    sleep 1.5 && clear
}
action() {
    echo 'Que faire ?'
    echo 'Attaquer   Heal'
    read Answer
}
fnum() {
    echo $(($1+1))
}
clear
echo 'Petite voix flippante: Salut, tu veux souffrir ?'
read Answer
clear
if [[ $Answer=$ans || $Answer=$answ ]]; then
    echo 'Petite voix flippante : Bonne souffrances >:D'
else
    exit
fi

slc && echo "Navi : Ne l'écoute pas, je sais où est le Boss, je te conduirais à lui"
slc && echo '===Fight' $(fnum 0) '==='
echo "Navi : voici ton premier adversaire, les codes de mon peuples m'interdisent de combattre. Je t'aiderai en te montrant les stats de ton adversaire" && action

