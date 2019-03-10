<?php

return [
    'table'      => 'amethyst_offices',
    'comment'    => 'Office',
    'model'      => Railken\Amethyst\Models\Office::class,
    'schema'     => Railken\Amethyst\Schemas\OfficeSchema::class,
    'repository' => Railken\Amethyst\Repositories\OfficeRepository::class,
    'serializer' => Railken\Amethyst\Serializers\OfficeSerializer::class,
    'validator'  => Railken\Amethyst\Validators\OfficeValidator::class,
    'authorizer' => Railken\Amethyst\Authorizers\OfficeAuthorizer::class,
    'faker'      => Railken\Amethyst\Fakers\OfficeFaker::class,
    'manager'    => Railken\Amethyst\Managers\OfficeManager::class,
];
