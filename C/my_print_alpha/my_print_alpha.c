/*
** Pool DEVC, 2020
** my_print_alpha
** File description:
** 		print alphabet in ascent order
*/


void my_putchar(char c);
void my_print_alpha(void)
{
    int n = 97;
    while (n <= 122 )
        {
            my_putchar(n);
            n=n+1;
            my_putchar('\n');
                }
}

