<?php

namespace Eltrino\EbayBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Eltrino\EbayBundle\DependencyInjection\Compiler\FosJsConfigurationPass;

class EltrinoEbayBundle extends Bundle
{
    /**
     * {@inheritdoc}
     */
    public function build(ContainerBuilder $container)
    {
        parent::build($container);

        $container->addCompilerPass(new FosJsConfigurationPass());
    }
}
