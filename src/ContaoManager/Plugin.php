<?php

namespace SmthDiff\ContaoSkeletonBundle\ContaoManager;

use Contao\CoreBundle\ContaoCoreBundle;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
use SmthDiff\ContaoSkeletonBundle\SmthDiffContaoSkeletonBundle;

class Plugin implements BundlePluginInterface
{
    /**
     * {@inheritdoc}
     */
    public function getBundles(ParserInterface $parser): array
    {
        return [
            BundleConfig::create(SmthDiffContaoSkeletonBundle::class)
                ->setLoadAfter([ContaoCoreBundle::class]),
        ];
    }
}
