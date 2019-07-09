<?php

namespace Amethyst\Schemas;

use Amethyst\Managers\AddressManager;
use Amethyst\Managers\CompanyManager;
use Railken\Lem\Attributes;
use Railken\Lem\Schema;

class OfficeSchema extends Schema
{
    /**
     * Get all the attributes.
     *
     * @var array
     */
    public function getAttributes()
    {
        return [
            Attributes\IdAttribute::make(),
            Attributes\TextAttribute::make('name')
                ->setRequired(true)
                ->setUnique(true),
            Attributes\LongTextAttribute::make('description'),
            Attributes\BelongsToAttribute::make('address_id')
                ->setRelationName('address')
                ->setRelationManager(AddressManager::class),
            Attributes\BelongsToAttribute::make('company_id')
                ->setRelationName('company')
                ->setRelationManager(CompanyManager::class),
            Attributes\CreatedAtAttribute::make(),
            Attributes\UpdatedAtAttribute::make(),
            Attributes\DeletedAtAttribute::make(),
        ];
    }
}
