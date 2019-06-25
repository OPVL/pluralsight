'use strict';

class Cat {
    /**
     * Initialises the 'Cat' class
     * @param {string} name give the kitty a name
     * @param {string} colour and dip in some paint
     */
    constructor(name, colour){
        this.name = name
        this.colour = colour
    }

    speak(){
        display(`Where the fuck's my lasagna John? I'm ${this.name} fuckin' field.`)
    }
}

let cat = new Cat('Graham', 'Blue');

display(cat);

cat.speak();