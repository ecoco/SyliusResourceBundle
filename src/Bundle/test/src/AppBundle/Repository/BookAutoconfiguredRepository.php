<?php

/*
 * This file is part of the Sylius package.
 *
 * (c) Paweł Jędrzejewski
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace AppBundle\Repository;

use Psr\Log\LoggerAwareInterface;
use Psr\Log\LoggerAwareTrait;
use Psr\Log\LoggerInterface;
use Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository;

final class BookAutoconfiguredRepository extends EntityRepository implements LoggerAwareInterface
{
    use LoggerAwareTrait;

    public function getLogger(): LoggerInterface
    {
        return $this->logger;
    }
}
