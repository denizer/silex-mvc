<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Forms\Constraints;

/**
 * Validates values aren't identical (!==).
 *
 * @author Daniel Holmes <daniel@danielholmes.org>
 */
class NotIdenticalToValidator extends AbstractComparisonValidator
{
    /**
     * {@inheritdoc}
     */
    protected function compareValues($value1, $value2)
    {
        return $value1 !== $value2;
    }
}
