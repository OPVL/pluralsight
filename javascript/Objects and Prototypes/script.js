'use strict';

let myFunc = function(){

}

display(myFunc.prototype);

function Cat(name, colour) {
    this.name = name
    this.colour = colour
}

let greg = new Cat('Greg', 'Yellow');

Cat.prototype.age = 3;

display(Cat.prototype);
display(greg.__proto__);

display(Cat.prototype === greg.__proto__);