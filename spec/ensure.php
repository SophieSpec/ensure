<?php

declare(strict_types=1);

Sophie\Ensure\ensure(1, 1);

try {
    Sophie\Ensure\ensure(1, 0);
    assert(false, 'Should have thrown a FailedAssertionException');
} catch (Sophie\Ensure\FailedAssertionException $e) {
}
