/*
** ETNA DevC POOL, 2020
** my_strcpy
** File description:
** 		copy a string into another
*/

#include <unistd.h>
void my_putchar(char c);
char *src= "bonjour";
char *my_strcpy(char *dest, const char *src){
    int i=0;
    while (src[i] != '\0') {
            dest[i] = src[i];
            i++;
        }
    dest[i]='\0';
    return dest;
}
