#ifndef __FISH_H
#define __FISH_H

typedef struct island {
    char *name;
    char *opens;
    char *closes;
    struct island *next;
} island;

void display(island *start);

#endif