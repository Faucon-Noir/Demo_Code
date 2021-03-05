#include <unistd.h>
#include <stdio.h>

void my_putchar(char c);

int my_getnbr(const char *str){
    int i = 0;
    int res = 0;
    
    while(str[i] != '\0'){
        if (i>= 0){
            
            res= res+str[i]-48;
            if (str[i+1]>'0' && str[i+1]<'9'){
                res=res*10;
            }
            i=i+1;
        }
    }
    if ('-' % 2 !=0){
        res= res*(-1);
    }
    else{
        res= res*1;
    }
    return (res); 
}
int main(void) {
    printf("%d\n", my_getnbr("+−−−+−−++−−−+−−−+−−−+−42"));
    return (0);
}
