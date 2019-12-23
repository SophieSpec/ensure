# Ensure

Ensure is born with the thought that an ideal unit test should be a strict equality between the output of a function and its expected result. Then, Ensure is that base tool for anything to test.

## Install

```sh
composer require sophie-spec/ensure
```

## Procedural API

```php
use function Ensure\ensure;

$add = function ($a, $b) {
    return $a + $b;
};

ensure($add(1, 2), 3);
```

If the assertion fails, a `Sophie\Ensure\FailedAssertionException` error is thrown with a detailed message:

```php
ensure($add(1, 2), 10);
/*
    Both values are not equal.

    Provided value:
        3

    Expected value:
        10
*/
```

More complex values are also well printed:

```php
ensure(
    [
        'strawberry',
        'orange',
        'lime',
    ],
    [
        'orange',
        'lime',
        'strawberry',
    ],
);

/*
    Both values are not equal.

    Provided value:
        array:3 [
            0 => (10) "strawberry"
            1 => (6) "orange"
            2 => (4) "lime"
        ]

    Expected value:
        array:3 [
            0 => (6) "orange"
            1 => (4) "lime"
            2 => (10) "strawberry"
        ]
*/
```

## Object API

The `ensure()` function is only a wrapper around the object API. Here's how to instantiate/user it:

```php
ensure($add(1, 2), 3);
// ...is the same as:
$assertion = new StrictEqualityAssertion($add(1, 2), 3);
$assertion->assert();
```

## License

[MIT](http://dreamysource.mit-license.org).
