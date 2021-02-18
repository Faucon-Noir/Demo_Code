/*
** POOL DEVC, 2020
** my_print_revalpha
** File description:
**      print alpha in descending order
*/

void my_putchar(char c);
void my_print_revalpha(void)
{
    int n = 122;
    while (n >= 97 )
        {
            my_putchar (n);
            n=n-1;
        }
}
