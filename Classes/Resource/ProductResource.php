<?php
declare(strict_types=1);

namespace PunktDe\Sylius\Api\Resource;

/*
 *  (c) 2018 punkt.de GmbH - Karlsruhe, Germany - http://punkt.de
 *  All rights reserved.
 */

use PunktDe\Sylius\Api\Dto\ApiDtoInterface;
use PunktDe\Sylius\Api\Dto\Product;

class ProductResource extends AbstractResource
{
    /**
     * @param string $identifier
     * @param string $parentResourceIdentifier
     * @return Product|null
     */
    public function get(string $identifier, string $parentResourceIdentifier = ''): ?ApiDtoInterface
    {
        return parent::get($identifier, $parentResourceIdentifier); // TODO: Change the autogenerated stub
    }


    /**
     * Returns the fields that should be sent when creating
     * a new entity.
     *
     * @return array
     */
    protected function getPostFields(): array
    {
        return [
            'code' => true,
            'translations' => false,
            'channels' => false,
            'mainTaxon' => false,
            'enabled' => false,
        ];
    }

    /**
     * Returns the fields that should be sent when updating
     * an entity.
     *
     * @return array
     */
    protected function getPatchFields(): array
    {
        return [
            'translations' => false,
            'channels' => false,
            'mainTaxon' => false,
            'enabled' => false,
        ];
    }

    /**
     * @return string
     */
    protected function getDtoClass(): string
    {
        return Product::class;
    }
}
