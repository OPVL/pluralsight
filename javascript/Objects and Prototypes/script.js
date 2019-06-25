'use strict';

let cat = {
    name: 'Graham',
    colour: 'Blue'
}

cat['Leg Length'] = 4;

display(Object.getOwnPropertyDescriptor(cat, 'name'));