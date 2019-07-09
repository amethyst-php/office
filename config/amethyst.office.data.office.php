<?php

return [
    'table'      => 'amethyst_offices',
    'comment'    => 'Office',
    'model'      => Amethyst\Models\Office::class,
    'schema'     => Amethyst\Schemas\OfficeSchema::class,
    'repository' => Amethyst\Repositories\OfficeRepository::class,
    'serializer' => Amethyst\Serializers\OfficeSerializer::class,
    'validator'  => Amethyst\Validators\OfficeValidator::class,
    'authorizer' => Amethyst\Authorizers\OfficeAuthorizer::class,
    'faker'      => Amethyst\Fakers\OfficeFaker::class,
    'manager'    => Amethyst\Managers\OfficeManager::class,
];
