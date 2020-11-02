<?php

declare(strict_types=1);

$assertion = new Sophie\Ensure\StrictEqualityAssertion(1, 1);
$assertion->assert();

try {
    $assertion = new Sophie\Ensure\StrictEqualityAssertion(1, 0);
    $assertion->assert();
    assert(false, 'Should have thrown a FailedAssertionException');
} catch (Sophie\Ensure\FailedAssertionException $e) {
}

try {
    $assertion = new Sophie\Ensure\StrictEqualityAssertion(1, 1.0);
    $assertion->assert();
    assert(false, 'Should have thrown a FailedAssertionException');
} catch (Sophie\Ensure\FailedAssertionException $e) {
}

try {
    $assertion = new Sophie\Ensure\StrictEqualityAssertion(1, true);
    $assertion->assert();
    assert(false, 'Should have thrown a FailedAssertionException');
} catch (Sophie\Ensure\FailedAssertionException $e) {
}

try {
    $assertion = new Sophie\Ensure\StrictEqualityAssertion(1, '1');
    $assertion->assert();
    assert(false, 'Should have thrown a FailedAssertionException');
} catch (Sophie\Ensure\FailedAssertionException $e) {
}
