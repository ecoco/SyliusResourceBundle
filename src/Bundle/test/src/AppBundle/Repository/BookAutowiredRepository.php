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

use AppBundle\Service\FirstAutowiredService;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\Mapping\ClassMetadata;
use Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository;

final class BookAutowiredRepository extends EntityRepository
{
    /** @var FirstAutowiredService */
    private $autowiredService;

    public function __construct(
        EntityManagerInterface $em,
        ClassMetadata $class,
        FirstAutowiredService $autowiredService
    )
    {
        parent::__construct($em, $class);

        $this->autowiredService = $autowiredService;
    }

    /**
     * @return FirstAutowiredService
     */
    public function getAutowiredService(): FirstAutowiredService
    {
        return $this->autowiredService;
    }
}
