<?php

namespace Eltrino\EbayBundle\Tests\Provider;

use Eltrino\EbayBundle\Provider\EbayChannelType;

class EbayChannelTypeTest extends \PHPUnit_Framework_TestCase
{
    /** @var ChannelType */
    private $channel;

    public function setUp()
    {
        $this->channel = new EbayChannelType();
    }

    public function tearDown()
    {
        unset($this->channel);
    }

    public function testPublicInterface()
    {
        $this->assertEquals('Ebay', $this->channel->getLabel());
    }
}