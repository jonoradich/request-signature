<?php

namespace Radich\RequestSignature\Header;

class BuilderTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Builder
     */
    private $builder;

    public function setUp()
    {
        $this->builder = new Builder();
    }

    public function testBuild()
    {
        $header = $this->builder->build('X-Signature', 'sha256 viu8942vuijuiwihouahv');
        $this->assertSame('X-Signature', $header->getName());
        $this->assertSame('sha256', $header->getAlgorithm());
        $this->assertSame('viu8942vuijuiwihouahv', $header->getSignature());
    }
}
