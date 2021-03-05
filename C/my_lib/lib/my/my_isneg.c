/*
** POOL DEVC, 2020
** my_isneg
** File description:
**      print P if integer parameter is Positive or Null and  N if parameter is Negative
*/
void my_putchar(char c);
void my_isneg(int n)
{
    if (n <0 )
        {
            my_putchar ('N');
        }
    else
        {
            my_putchar ('P');
        }
}
