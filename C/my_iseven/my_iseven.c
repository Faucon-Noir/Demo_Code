/*
** POOL DEVC, 2020
** my_iseven
** File description:
**      print E if the Integer passed as parameter is even and O if odd
*/

void my_putchar(char c);

void my_iseven(int n)
{
    if (n%2==0 )
        {
            my_putchar ('E');
        }
    else
        {
            my_putchar ('O');
        }
}
