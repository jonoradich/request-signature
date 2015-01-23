<?php

namespace Radich\RequestSignature;

use Radich\RequestSignature\HashStrategy\HashStrategyInterface;
use Radich\RequestSignature\Header\Header;

class Service
{
    /**
     * @var HashStrategyInterface
     */
    private $hashStrategy;

    /**
     * @param HashStrategyInterface $hashStrategy
     */
    public function __construct(HashStrategyInterface $hashStrategy)
    {
        $this->hashStrategy = $hashStrategy;
    }

    /**
     * @return string
     */
    public function createSignature()
    {

    }

    /**
     * @return Header
     */
    public function createSignatureAsHeader()
    {

    }

    /**
     * @param string $signature
     */
    public function validateSignature($signature)
    {

    }

    /**
     * @param Header $header
     */
    public function validateSignatureAsHeader(Header $header)
    {

    }
}
