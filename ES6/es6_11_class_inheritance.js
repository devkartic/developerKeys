// Class Inheritance in ES6

/*
In ES6 support multilevel inheritance
*/

class Employee{
    constructor(name = 'Sir', basicSalary=10000) {
        this.name = name;
        this.basicSalary = basicSalary;
    }
}

class General extends Employee{
    info(){
        let detail = `Employee type: General\nName: ${this.name}\nSalary: ${this.basicSalary}`;
        console.log(detail);
    }
}

class Officer extends Employee{
    constructor(name = 'Sir', basicSalary=10000) {
        super();
        this.name = name;
        this.basicSalary = basicSalary;
    }
    info(){
        let pb = 1000;
        let ib = 1000;
        this.basicSalary = this.basicSalary+pb+ib;
        let detail = `Employee type: Officer\nName: ${this.name}\nSalary: ${this.basicSalary}`;
        console.log(detail);
    }
}


let general = new General('Kartic Gharami', 15000);
let officer = new Officer('Tamal Chakroborty', 15000);


general.info();
console.log('------------------------');
officer.info();


