// Export in ES6

let user = (name) =>{
    return `Hi, I am ${name}.`;
}

class Test {
    constructor(profession='Programmer') {
        this.designation = profession
    }

    profession = () => {
        return `I am working as a ${this.designation}`;
    }
}

export { user, Test };




