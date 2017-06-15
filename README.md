
## Overview

It's very difficult to track a request accross the system when we work microservices. We came out a solution for that. We generate a unique version 4 uuid for every request and every service passes this id via request header to other services. We call this **correlation ID**.

## Installation

You should not use this directly. 

By the way if you want to use it directly, you can install it via composer.

```bash
$ composer require proemergotech/correlate-php-monolog
```

## Usage

Generate a correlation id:
```php
$processor = new \ProEmergotech\Correlate\Monolog\CorrelateProcessor('x_correlation_id', $correlationId);
$monolog->pushProcessor(new CorrelateProcessor(Correlate::getParamName(), $cid));
```

## Contributing

See `CONTRIBUTING.md` file.

## Credits

This package developed by [Soma Szélpál](https://github.com/shakahl/) at [Pro Emergotech Ltd.](https://github.com/proemergotech/).

## License

This project is released under the [MIT License](http://www.opensource.org/licenses/MIT).
