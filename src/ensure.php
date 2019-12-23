<?php

declare(strict_types=1);

namespace Sophie\Ensure;

/**
 * @param mixed $provided
 * @param mixed $expected
 */
function ensure($provided, $expected): void
{
    $assertion = new StrictEqualityAssertion($provided, $expected);
    $assertion->assert();
}
