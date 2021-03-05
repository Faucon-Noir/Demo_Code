/*
** POOL DEVC, 2020
** my_power_rec
** File description:
**      create a recursive function that returns the first raised to the power p.
*/
#include <unistd.h>
void my_putchar(char c);
int my_power_rec(int nb, int p){
    int i;
    if(p<13){
        i= nb*nb;
        nb =my_power_rec(nb, p+1);
    }
    else{
        return(0);
    }
    return (i);
}