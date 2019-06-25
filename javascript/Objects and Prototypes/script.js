'use strict';

let cat = {
    name: {first: 'Graham', last: 'Field'},
    colour: 'Blue'
}

cat['Leg Length'] = 4;

// fuckin skitz
Object.defineProperty(cat, 'name', {writable: false});
// Object.freeze(cat.name);
cat.name.first = 'Greg';
display(Object.getOwnPropertyDescriptor(cat, 'name'));
display(cat.name);

Object.defineProperty(cat, 'name', {enumerable: false});
display(Object.getOwnPropertyDescriptor(cat, 'name'));

for (const propertyName in cat) {
    if (cat.hasOwnProperty(propertyName)) {
        const property = cat[propertyName];
        display(property);
    }
}

display(Object.keys(cat));

display(JSON.stringify(cat)); // enumerable prevents the property from being serialised in to JSON