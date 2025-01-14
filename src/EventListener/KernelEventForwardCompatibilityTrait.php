<?php

declare(strict_types=1);

/*
 * This file is part of the Nelmio SecurityBundle.
 *
 * (c) Nelmio <hello@nelm.io>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Nelmio\SecurityBundle\EventListener;

use Symfony\Component\HttpKernel\Event\KernelEvent;

/**
 * Provides forward compatibility with newer Symfony versions.
 *
 * @internal
 */
trait KernelEventForwardCompatibilityTrait
{
    protected function isMainRequest(KernelEvent $event): bool
    {
        return method_exists($event, 'isMainRequest')
            ? $event->isMainRequest()
            : $event->isMasterRequest()
        ;
    }
}
