'use strict';

let cat = {
    name: {first: 'Graham', last: 'Field'},
    colour: 'Blue'
}

cat['Leg Length'] = 4;

Object.defineProperty(cat, 'name', {configurable: false});
Object.defineProperty(cat, 'name', {enumerable: false}); // cannot redefine property & prevents deletion
delete cat.name;