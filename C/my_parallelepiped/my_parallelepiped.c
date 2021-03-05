/*
** POOL DEVC, 2020
** my_parallelepiped
** File description:
**      draw a parallelepiped with 3 coordinates
*/

#include <unistd.h>

int x;
int y;
int z;
void my_putchar(char c)

void my_parallelepiped(int x, int y, int z)
{
     while (x='1' && y='1' && z='1')
    {
        my_putchar('*');
    }

    while(x='2' && y='2' && z='2')
        {
            my_putchar(" **\n***\n**");
        }
    while ( x !='0' &&  y !='0' &&  z !='0')
        {
            
            /* not equal : neq 
            ** equal : eq
            ** all parameters in previous simple parenthesis : =>
            ** px : number of - defined by x to print
            ** py : number of | defined by y to print 
            ** pz : number of / defined by z to print 
            ** 
            ** In order to draw a parallelepiped, x y and z follows the next function:
            */
            
            while (x !=y && y !=1 && z !=1)
            {
                while (x !=2 && y!=2 && z !=2)
                {
                    var px=bc(x-2);
                    var py=bc(y-2);
                    var pz=bc(z-2);
                    my_putchar (px);
                    my_putchar (py);
                    my_putchar (pz);
                }
            }
            
            /*
            ** On the terminal, x print "*var(px)*" horizontally;
            ** yprint "*var(py)*" vertically;
            ** z print "*var(pz)*" in diagonal;
            ** and to add volume, it's needed to print with a decal like that (x eq 6, y eq 3, z eq 4);
            **    *----*
            **   /    /|
            **  /    / *
            ** *----* /
            ** |    |/
            ** *----*
            **
            ** need to find how init x y & z by reading my_parallelepiped coordinates
            ** need to find how to decal
            ** need to unerstand how can I fix
            ** need to find command to calculate : bc, but don't understand how use it     
            */
        }
    
}
