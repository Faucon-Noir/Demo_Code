/*
** ETNA DevC POOL, 2020
** my_strncpy
** File description:
** 		copy n numbers of characters of a string into another
*/

#include <unistd.h>
void my_putchar(char c)
void my_putstr(const char *str){
    int i=0;
    while (str[i] != '\0'){
        my_putchar(str[i]);
        i=i+1;
    }
}

char *my_strncpy(char *dest, const char *src, int n){
    int i=0;
    while (src[i] != '\0' && n > i) {
            dest[i] = src[i];
            i++;
    }
    dest[i]='\0';
    return dest;
}
