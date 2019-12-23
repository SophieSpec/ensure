<?php

declare(strict_types=1);

namespace Sophie\Ensure;

use Symfony\Component\VarDumper\Cloner\VarCloner;
use Symfony\Component\VarDumper\Dumper\AbstractDumper;
use Symfony\Component\VarDumper\Dumper\CliDumper;

final class VarRepresentation implements VarRepresentationInterface
{
    /**
     * @var mixed
     */
    private $var;

    private VarCloner $cloner;

    private CliDumper $dumper;

    /**
     * @param mixed $var
     */
    public function __construct($var)
    {
        $this->var = $var;
        $this->cloner = new VarCloner();
        $this->dumper = new CliDumper(
            null,
            null,
            AbstractDumper::DUMP_STRING_LENGTH
        );
    }

    /**
     * Export a variable to a string representation of it.
     */
    public function represent(int $indent = 0): string
    {
        $output = '';
        $this->dumper->dump(
            $this->cloner->cloneVar($this->var),
            function (int $line, int $depth) use (&$output, $indent): void {
                if ($depth >= 0) {
                    /** @psalm-suppress MixedOperand */
                    $output .= str_repeat(' ', $depth * 2 + $indent);
                    $output .= "$line\n";
                }
            }
        );
        /** @psalm-suppress MixedArgument */
        return rtrim($output);
    }
}
