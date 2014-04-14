<?php

namespace Eltrino\EbayBundle\Provider;

use Oro\Bundle\IntegrationBundle\Provider\ChannelInterface;

class EbayChannelType implements ChannelInterface
{
    const TYPE = 'ebay';

    /**
     * {@inheritdoc}
     */
    public function getLabel()
    {
        return 'Ebay';
    }
}