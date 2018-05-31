<?php

namespace Icepique\AppBundle;

use Icepique\BezplatnoBundle\DependencyInjection\Compiler;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;

/**
 * @author Svetlin Staev <svetlin@icepique.com>
 */
class IcepiqueAppBundle extends Bundle
{
    /**
     * @param ContainerBuilder $container
     */
    public function build(ContainerBuilder $container)
    {
    }
}
