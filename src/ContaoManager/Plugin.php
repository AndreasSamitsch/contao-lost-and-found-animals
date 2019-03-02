<?php

namespace Tsz\ContaoLostAndFoundAnimals\ContaoManager;

use Contao\CoreBundle\ContaoCoreBundle;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
use Tsz\ContaoLostAndFoundAnimals\ContaoLostAndFoundAnimals;

class Plugin implements BundlePluginInterface
{
    /**
     * {@inheritdoc}
     */
    public function getBundles(ParserInterface $parser)
    {
        return [
            BundleConfig::create(ContaoLostAndFoundAnimals::class)
                ->setLoadAfter([ContaoCoreBundle::class]),
        ];
    }
}
