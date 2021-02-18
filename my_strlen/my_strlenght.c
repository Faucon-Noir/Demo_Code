#include <unistd.h>
void my_putchar(char c)
{
    write(1, &c, 1);
}

int my_strlen(const char *str)
{
    int i=0;
    while (str[i] !='\n')
        {
            i=i+1;
        }
    return (i);
}
int main(int argc, char **argv)
{
    my_putchar('\n');
    return(0);
}
