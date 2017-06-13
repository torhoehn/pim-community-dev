<?php

namespace Pim\Component\Catalog\Updater\Remover;

use Pim\Component\Catalog\Model\AttributeInterface;
use Pim\Component\Catalog\Model\ValuesContainerInterface;

/**
 * Remove a value from a values container
 *
 * @author    Willy Mesnage <willy.mesnage@akeneo.com>
 * @copyright 2015 Akeneo SAS (http://www.akeneo.com)
 * @license   http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
interface AttributeRemoverInterface extends RemoverInterface
{
    /**
     * Remove attribute data
     *
     * @param ValuesContainerInterface $valuesContainer The values container to modify
     * @param AttributeInterface       $attribute       The attribute of the values container to modify
     * @param mixed                    $data            The data to remove
     * @param array                    $options         Options passed to the remover
     *
     * @return
     */
    public function removeAttributeData(
        ValuesContainerInterface $valuesContainer,
        AttributeInterface $attribute,
        $data,
        array $options = []
    );

    /**
     * Supports the attribute
     *
     * @param AttributeInterface $attribute
     *
     * @return bool
     */
    public function supportsAttribute(AttributeInterface $attribute);
}
