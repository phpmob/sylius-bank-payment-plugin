<?php

declare(strict_types=1);

namespace PhpMob\SyliusBankPaymentPlugin;

use Sylius\Bundle\CoreBundle\Application\SyliusPluginTrait;
use Symfony\Component\HttpKernel\Bundle\Bundle;

final class PhpMobSyliusBankPaymentPlugin extends Bundle
{
    use SyliusPluginTrait;
}
