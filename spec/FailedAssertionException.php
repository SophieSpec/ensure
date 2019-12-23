<?php

declare(strict_types=1);

/*
    sig(Sophie\Ensure\FailedAssertionException::class)
        ->extends(Exception::class);
*/

$exception = new Sophie\Ensure\FailedAssertionException(
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

assert($exception->getMessage() === <<<OUTPUT
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
OUTPUT);
