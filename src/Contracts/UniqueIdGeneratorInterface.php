<?php

namespace Abe\UniqueId\Contracts;

/**
 * Interface UniqueIdGeneratorInterface
 */
interface UniqueIdGeneratorInterface
{
    /**
     * Generate a unique id.
     *
     * @return int|string
     */
    public function generate(): int|string;
}
