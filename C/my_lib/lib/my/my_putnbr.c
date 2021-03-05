/*
** POOL DEVC, 2020
** my_putnbr
** File description:
**      display the number given as a parameter
*/
#include <unistd.h>
void my_putchar(char c );
void my_putnbr(int n){
    my_putchar (n);
    my_putchar('\n');
}
