<?php

declare(strict_types=1);

namespace Sophie\Ensure;

interface VarRepresentationInterface
{
    /**
     * Export a variable to a string representation of it.
     */
    public function represent(int $indent = 0): string;
}
