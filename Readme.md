# JSON Parser

### Technical Requirements
* PHP 5.6 or higher.
* PHP should be in your env.
* A text editor of your choice.
* Composer for class autoloading
* Some kind of shell, to run this project

### Setup
Copy this project into your web root directory, cd into it from terminal and run following commands:
```
$ composer self-update
$ composer update
$ composer dump-autoload
```
### Run
Open terminal and cd into project directory and run following command:
```
$ bin/app
//or
$ php bin/app
```

---

### Goals

#### 1. Implement a basic CategoryService.
* Use the JSON file in the data directory as your data source.
* Your implementation must read the result set from the data source and pass the values from the json file into the corresponding classes from the Entity namespace.

#### 2. Build a basic validator for the Variant Entity.
* Build a validation mechanism for the Variant Entity’s properties and implement it.
* Place the validation class in a proper position within the given architecture.
* Ensure the values are valid.

#### 3. Implement a way to get different implementations of the ProductServiceInterface.
* Use simple factory, abstract factory or dependency injection pattern.
* Optional: Write a second implementation for ProductServiceInterface (PriceOrderedProductService or SizeOrderedProductService).

---

### My Approach

As refactoring was allowed i followed repository approach and removed services, but basic idea and it's working remains same.

I did not create front controller to access this project from browser as i like the way it displays contents in terminal.

Project structure can be improved in many ways.. if i gave it more time! :)

