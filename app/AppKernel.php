<?php

/*
 * This file is part of the Sylius package.
 *
 * (c) Paweł Jędrzejewski
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use Sylius\Bundle\CoreBundle\Kernel\SyliusKernel;

/**
 * Sylius kernel.
 *
 * @author Paweł Jędrzejewski <pjedrzejewski@diweb.pl>
 */
class AppKernel extends SyliusKernel
{
    public function registerBundles()
    {
        $bundles = array(
            new \Im0rtality\ColdBreezeBundle\Im0rtalityColdBreezeBundle(),
        );
        if ('prod' === $this->environment) {
            $bundles[] = new \Doctrine\Bundle\FixturesBundle\DoctrineFixturesBundle();
            $bundles[] = new \Sylius\Bundle\FixturesBundle\SyliusFixturesBundle();
        }

        return array_merge($bundles, parent::registerBundles());
    }
}
