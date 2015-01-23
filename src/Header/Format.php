<?php

namespace Radich\RequestSignature\Header;

/**
 * Encapsulates the format of a signature headers value.
 *
 * By default the format is:
 * '{algorithm} {value}'
 *
 */
class Format
{
    /**
     * Optional key for the algorithm value.
     * Defaults to a blank string (no key).
     *
     * @var string
     */
    private $algorithmKey = '';

    /**
     * Optional key for the signature value.
     * Defaults to a blank string (no key).
     *
     * @var string
     */
    private $signatureKey = '';

    /**
     * Delimiter between the algorithm and signature.
     * Defaults to one space.
     *
     * @var string
     */
    private $delimiter = ' ';

    /**
     * Optional assignment operator between a key and value
     * e.g. between the signature key and signature value.
     * Defaults to a blank string (no operator)
     *
     * @var string
     */
    private $assignmentOperator = '';

    /**
     * @param string $key
     * @return $this
     */
    public function setAlgorithmKey($key)
    {
        $this->algorithmKey = $key;

        return $this;
    }

    /**
     * @return string
     */
    public function getAlgorithmKey()
    {
        return $this->algorithmKey;
    }

    /**
     * @param string $key
     * @return $this
     */
    public function setSignatureKey($key)
    {
        $this->signatureKey = $key;

        return $this;
    }

    /**
     * @return string
     */
    public function getSignatureKey()
    {
        return $this->signatureKey;
    }

    /**
     * @param string $operator
     * @return $this
     */
    public function setAssignmentOperator($operator)
    {
        $this->assignmentOperator = $operator;

        return $this;
    }

    /**
     * @return string
     */
    public function getAssignmentOperator()
    {
        return $this->assignmentOperator;
    }

    /**
     * @param string $delimiter
     * @return string
     */
    public function setDelimiter($delimiter)
    {
        $this->delimiter = $delimiter;

        return $this;
    }

    /**
     * @return string
     */
    public function getDelimiter()
    {
        return $this->delimiter;
    }
}
