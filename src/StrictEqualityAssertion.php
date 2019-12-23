<?php

declare(strict_types=1);

namespace Sophie\Ensure;

final class StrictEqualityAssertion implements AssertionInterface
{
    /**
     * @var mixed
     */
    private $provided;

    /**
     * @var mixed
     */
    private $expected;

    /**
     * @param mixed $provided
     * @param mixed $expected
     */
    public function __construct($provided, $expected)
    {
        $this->provided = $provided;
        $this->expected = $expected;
    }

    public function assert(): void
    {
        if ($this->provided !== $this->expected) {
            throw new FailedAssertionException(
                $this->provided,
                $this->expected
            );
        }
    }
}
