'use strict';

let cat = {
    name: 'Fluffy',
    color: 'White'
}
cat.age = 4;
cat.speak = function () {
    display("Where's my lasagna John?");
}

display(cat.name);
display(cat.age);