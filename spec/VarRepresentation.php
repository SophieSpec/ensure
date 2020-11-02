<?php

declare(strict_types=1);

$varRepresentation = new Sophie\Ensure\VarRepresentation([
    'strawberry',
    'orange',
    'lime',
]);

assert($varRepresentation->represent(2) === <<<OUTPUT
  array:3 [
    0 => (10) "strawberry"
    1 => (6) "orange"
    2 => (4) "lime"
  ]
OUTPUT);
