'use strict';

let cat = {
    name: {first: 'Graham', last: 'Field'},
    colour: 'Blue'
}

cat['Leg Length'] = 4;

// fuckin skitz
Object.defineProperty(cat, 'name', {writable: false});
cat.name = 'Greg';
display(Object.getOwnPropertyDescriptor(cat, 'name'));

true