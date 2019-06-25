'use strict';

//new
// function Cat(name, colour){
//     this.name = name
//     this.colour = colour
// }

// let cat = new Cat('Kevin', 'Disgruntled Muffin');

let cat = Object.create(Object.prototype,{
    name: {
        value: 'Fluffy',
        enumerable: true,
        writable: true,
        configurable: true
    },
    color: {
        value: 'White',
        enumerable: true,
        writable: true,
        configurable: true
    }
});

display(cat);