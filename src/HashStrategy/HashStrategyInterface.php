<?php

namespace Radich\RequestSignature\HashStrategy;

interface HashStrategyInterface
{
    /**
     * Create a deterministic hash
     *
     * @param string $value_to_hash
     * @param string $secret
     * @return mixed
     */
    public function createHash($value_to_hash, $secret);

    /**
     * Check a hash is valid with the given secret
     *
     * @param string $hash
     * @param string $secret
     * @return bool
     */
    public function checkHash($hash, $secret);
}
