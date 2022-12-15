<?php

namespace SmthDiff\ContaoSkeletonBundle;

use SmthDiff\ContaoSkeletonBundle\DependencyInjection\SmthDiffContaoSkeletonExtension;
use Symfony\Component\DependencyInjection\Extension\Extension;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class SmthDiffContaoSkeletonBundle extends Bundle
{
    /**
     * Register extension
     *
     * @return Extension
     */
    public function getContainerExtension(): Extension
    {
        return new SmthDiffContaoSkeletonExtension();
    }
}
