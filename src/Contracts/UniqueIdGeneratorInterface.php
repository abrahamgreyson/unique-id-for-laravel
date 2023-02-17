<?php

namespace Abe\UniqueId\Contracts;

/**
 * Interface UniqueIdGeneratorInterface
 */
interface UniqueIdGeneratorInterface
{
    /**
     * Generate a unique id.
     */
    public function generate(): int|string;
}
