<?php

/*
 * This file is part of the API Platform project.
 *
 * (c) Kévin Dunglas <dunglas@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace ApiPlatform\Tests\Fixtures;

use Symfony\Component\Serializer\Annotation\Groups;

/**
 * This class is not mapped as an API resource.
 *
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
class NotAResource
{
    public function __construct(
        /**
         * @Groups("contain_non_resource")
         */
        private $foo,
        /**
         * @Groups("contain_non_resource")
         */
        private $bar
    ) {
    }

    public function getFoo()
    {
        return $this->foo;
    }

    public function getBar()
    {
        return $this->bar;
    }
}
