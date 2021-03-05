#include <unistd.h>

void my_putchar(char c)
int my_factorial_rec(int n){
    int nb = n;
    if (n > 1){
        nb=(my_factorial_rec(n-1));
        nb= n*nb;
    }
    return (n);
}

