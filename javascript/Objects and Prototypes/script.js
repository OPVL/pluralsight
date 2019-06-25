'use strict';

let arr = ['red', 'green', 'blue'];
Object.defineProperty(Array.prototype, 'last', {get: function(){
    return this[this.length - 1];
}});

let last = arr[arr.length - 1]; // crappy way

display(arr.last);

let arr2 = ['red', 'green', 'blue','red', 'green', 'blue','gorilla'];
display(arr2.last);