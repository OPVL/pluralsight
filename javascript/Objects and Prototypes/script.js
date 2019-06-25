'use strict';

let cat = {
    name: {first: 'Graham', last: 'Field'},
    colour: 'Blue'
}

Object.defineProperty(cat, 'fullName', {
    get: function(){
        return `${this.name.first} ${this.name.last}`;
    },
    set: function(value){
        let nameParts = value.split(' ');
        this.name.first = nameParts[0];
        this.name.last = nameParts[1];
    }
});

display(cat.fullName);
cat.fullName = 'Garmanar Felds';
display(cat.fullName);
{
// cat['Leg Length'] = 4;

// // Object.defineProperty(cat, 'name', {configurable: false});
// Object.defineProperty(cat, 'name', {writable: false}); // can change writable
// Object.defineProperty(cat, 'name', {enumerable: false}); // cannot redefine property & prevents deletion
// delete cat.name;

// display(cat);
}