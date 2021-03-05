#include <unistd.h>

int my_strlen(const char *str){
    int i=0;
    while(str[i] != '\0'){
        i=i+1;
    }
    return (i);
}
char *my_revstr(char *str){
    int i = 0;
    int j = my_strlen(str)-1;
    int temp;
    while(j>i)
        {
            temp=str[i];
            str[i]=str[j];
            str[j]=temp;
            i++;
            j--;
        }
    return (str);
}
