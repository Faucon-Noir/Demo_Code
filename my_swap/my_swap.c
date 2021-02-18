#include <stdio.h>

void swap(int *a; int *b)
{
    int t;
    t= *b;
    *b= *a;
    *a= t;
}
