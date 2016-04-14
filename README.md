# Example for Dependency Injection

This project is small enough to be used as an example to explain Dependency Injection. It uses [Pimple](https://pimple.sensiolabs.org) as DI container, but you can replace it with any flavor of DI you like. A good article can be found on [the webiste of SitePoint](http://in2.se/php-di-links) where they explain very well dependency injection from a basic point of view.

## Installation

Best is to fork this repo to your own [GitHub](https://github.com) account before continuing, but you can also just grab these resources.

```
git clone https://github.com/DragonBe/di.git
cd di/
composer install
```

## Examples

See the `examples/` directory for a simple example.

```
php examples/persons.php
```

Should produce the following

```
Jane Doe|1970-01-01|female

Jane Doe|1970-01-01|female
John Doe|1992-03-31|male
```

## License

This example is braught to you by [Michelangelo van Dam](http://www.dragonbe.com) and is released under the [MIT license](LICENSE).