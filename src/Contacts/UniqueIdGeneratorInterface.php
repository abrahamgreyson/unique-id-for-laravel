<?php

namespace UniqueIdForLaravel\Contracts;

/**
 * Interface UniqueIdGeneratorInterface
 */
interface UniqueIdGeneratorInterface
{
    /**
     * @return string
     */
    public function generate(): string;
}
