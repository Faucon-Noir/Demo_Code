/*
** ETNA DevC POOL, 2020
** my_strcmp
** File description:
** 		compare characters one by one of two string
*/

#include <unistd.h>
#include <string.h>

void my_putchar(char c);

int my_strcmp(const char *s1, const char *s2){
    int i=0;
    
    while(s1[i] !='\0' && s2[i] !='\0' && s1[i] == s2[i]){
            i++;
    }
    return (s1[i]-s2[i]);
}
 
