<?php

namespace Radich\RequestSignature\Header;

/**
 * Builds signature header value objects
 */
class Builder
{
    /**
     * @var Format
     */
    private $receivedFormat;

    /**
     * @var Format
     */
    private $buildFormat;

    /**
     * Set default formats
     */
    public function __construct()
    {
        $this->receivedFormat = new Format();
        $this->buildFormat = new Format();
    }

    /**
     * @param Format $format
     */
    public function setReceivedValueFormat(Format $format)
    {
        $this->receivedFormat = $format;
    }

    /**
     * @param Format $format
     */
    public function setBuildValueFormat(Format $format)
    {
        $this->buildFormat = $format;
    }

    /**
     * @param string $header_name
     * @param string $header_value
     * @return Header
     */
    public function build($header_name, $header_value)
    {
        $pattern = '/' .
            $this->receivedFormat->getAlgorithmKey() .
            $this->receivedFormat->getAssignmentOperator() .
            '(?<algorithm>\w+)' .
            $this->receivedFormat->getDelimiter() .
            $this->receivedFormat->getSignatureKey() .
            $this->receivedFormat->getAssignmentOperator() .
            '(?<signature>\w+)/';

        preg_match($pattern, $header_value, $matches);

        if (!isset($matches['algorithm']) || !isset($matches['signature'])) {
            throw new \RuntimeException('Header format is not recognized');
        }

        $header = new Header();
        $header->setName($header_name)
            ->setAlgorithm($matches['algorithm'])
            ->setSignature($matches['signature']);

        return $header;
    }
}
