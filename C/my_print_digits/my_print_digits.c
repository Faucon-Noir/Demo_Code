/*
** POOL DEVC, 2020
** my_print_digits
** File description:
**      print digits in ascending order
*/
void my_putchar(char c);
void my_print_digits(void)
{
    int n = 48;
    while (n <= 57 )
        {
            my_putchar(n);
            n=n+1;
        }
}

