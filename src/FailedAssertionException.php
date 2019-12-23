<?php

declare(strict_types=1);

namespace Sophie\Ensure;

use Exception;

final class FailedAssertionException extends Exception
{
    const VAR_INDENT = 4;

    /**
     * @param mixed $provided
     * @param mixed $expected
     */
    public function __construct($provided, $expected)
    {
        $providedVarRepresentation = new VarRepresentation($provided);
        $expectedVarRepresentation = new VarRepresentation($expected);
        parent::__construct(<<<MESSAGE
        Both values are not equal.

          Provided value:
        {$providedVarRepresentation->represent(self::VAR_INDENT)}

          Expected value:
        {$expectedVarRepresentation->represent(self::VAR_INDENT)}
        MESSAGE);
    }
}
