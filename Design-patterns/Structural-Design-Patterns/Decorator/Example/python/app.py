# Interfejs komponentu bazowego
class Coffee:
    def get_cost(self):
        pass

    def get_description(self):
        pass

# Konkretny komponent bazowy
class SimpleCoffee(Coffee):
    def get_cost(self):
        return 10

    def get_description(self):
        return "Prosta kawa"

# Abstrakcyjny dekorator
class CoffeeDecorator(Coffee):
    def __init__(self, decorated_coffee):
        self.decorated_coffee = decorated_coffee

    def get_cost(self):
        return self.decorated_coffee.get_cost()

    def get_description(self):
        return self.decorated_coffee.get_description()

# Konkretny dekorator: Mleko
class Milk(CoffeeDecorator):
    def __init__(self, decorated_coffee):
        super().__init__(decorated_coffee)

    def get_cost(self):
        return self.decorated_coffee.get_cost() + 5

    def get_description(self):
        return self.decorated_coffee.get_description() + ", Mleko"

# Konkretny dekorator: Cukier
class Sugar(CoffeeDecorator):
    def __init__(self, decorated_coffee):
        super().__init__(decorated_coffee)

    def get_cost(self):
        return self.decorated_coffee.get_cost() + 2

    def get_description(self):
        return self.decorated_coffee.get_description() + ", Cukier"

# Użycie
simple_coffee = SimpleCoffee()
print(simple_coffee.get_description() + ": $" + str(simple_coffee.get_cost()))

milk_coffee = Milk(simple_coffee)
print(milk_coffee.get_description() + ": $" + str(milk_coffee.get_cost()))

sugar_coffee = Sugar(simple_coffee)
print(sugar_coffee.get_description() + ": $" + str(sugar_coffee.get_cost()))

milk_sugar_coffee = Milk(Sugar(simple_coffee))
print(milk_sugar_coffee.get_description() + ": $" + str(milk_sugar_coffee.get_cost()))
