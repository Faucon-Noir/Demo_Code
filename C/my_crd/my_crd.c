#define _GNU_SOURCE
#include <stdio.h>
#include <stdlib.h>
#include <unistd.h>
#include <my.h>
int key;
int value;
int entry;

/*lecture*/
char *my_readline(void)
{
    size_t n = 0;
    char *ret = NULL;
    ssize_t result = getline(&ret, &n, stdin);
    
    if (result <= 0) {
        free(ret);
        return NULL;
    }
    if (ret[result - 1] == '\n') {
        ret[result - 1] = '\0';
    }
    return ret;
}



/*ajout*/
int add(void){
    if (key = NULL) {
        value=entry;
    }
}

/*mise à jour*/
int update(void){
    if (key != NULL){
        value=entry;
    }
}

/*supression*/
int delete(void){
    if (key != NULL){
        return (value);
        value = NULL;
    }
    else{
        return("-1");
    }
}

/*recherche*/
int lookup(void){
    if (key != NULL){
        return value;
    }
    else{
        return("-1");
    }
}

/*script*/
while (my_readline){
    *key=entry
 }
