const express = require('express');
const app = express();

// Klasa reprezentująca podstawowe zamówienie w kawiarni
class BasicCoffee {
    serve() {
        return 'Podstawowa kawa';
    }

    cost() {
        return 10;
    }
}

// Abstrakcyjny dekorator
class CoffeeDecorator {
    constructor(coffee) {
        this.coffee = coffee;
    }

    serve() {
        return this.coffee.serve();
    }

    cost() {
        return this.coffee.cost();
    }
}

// Konkretny dekorator dodający mleko
class Milk extends CoffeeDecorator {
    constructor(coffee) {
        super(coffee);
    }

    serve() {
        return `${this.coffee.serve()}, z mlekiem`;
    }

    cost() {
        return this.coffee.cost() + 5;
    }
}

// Konkretny dekorator dodający cukier
class Sugar extends CoffeeDecorator {
    constructor(coffee) {
        super(coffee);
    }

    serve() {
        return `${this.coffee.serve()}, z cukrem`;
    }

    cost() {
        return this.coffee.cost() + 2;
    }
}

// Użycie dekoratora w Express.js
app.get('/', (req, res) => {
    const coffee = new BasicCoffee();
    res.send(coffee.serve() + ': $' + coffee.cost());
});

app.get('/milk', (req, res) => {
    const coffeeWithMilk = new Milk(new BasicCoffee());
    res.send(coffeeWithMilk.serve() + ': $' + coffeeWithMilk.cost());
});

app.get('/sugar', (req, res) => {
    const coffeeWithSugar = new Sugar(new BasicCoffee());
    res.send(coffeeWithSugar.serve() + ': $' + coffeeWithSugar.cost());
});

app.listen(3000, () => {
    console.log('Serwer działa na http://localhost:3000');
});
