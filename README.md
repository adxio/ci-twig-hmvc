# Twig and HMVC for Codeigniter
[![Latest Stable Version](https://poser.pugx.org/adxio/ci-twig-hmvc/v/stable)](https://packagist.org/packages/adxio/ci-twig-hmvc)
[![Total Downloads](https://poser.pugx.org/adxio/ci-twig-hmvc/downloads)](https://packagist.org/packages/adxio/ci-twig-hmvc)
[![Latest Unstable Version](https://poser.pugx.org/adxio/ci-twig-hmvc/v/unstable)](https://packagist.org/packages/adxio/ci-twig-hmvc)
[![License](https://poser.pugx.org/adxio/ci-twig-hmvc/license)](https://packagist.org/packages/adxio/ci-twig-hmvc)

Twig and HMVC Integration for Code Igniter 3.1.10

## Server Requirements
PHP version 7 or newer.
Twig 2.6.2 or later.

## Folder Structure
```
root/
└── application/
    └── module/
        └── welcome/
            └── controllers
                └── Welcome.php
            └── models
                └── Model.php
            └── views
                └── welcome.twig
```

## Installation

### With Composer

~~~
$ cd /to/path/root/codeigniter
$ composer require adxio/twig-hmvc
~~~

For installation following this command

~~~
$ php vendor/adxio/twig-hmvc/install.php
~~~

And then you must change owner of folder cache

~~~
$ sudo chown www-data:www-data application/cache
~~~

* You must run at CodeIgniter root folder

#### Done and Happy coding
