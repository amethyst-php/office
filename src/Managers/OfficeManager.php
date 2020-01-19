<?php

namespace Amethyst\Managers;

use Amethyst\Core\ConfigurableManager;
use Railken\Lem\Manager;

/**
 * @method \Amethyst\Models\Office                 newEntity()
 * @method \Amethyst\Schemas\OfficeSchema          getSchema()
 * @method \Amethyst\Repositories\OfficeRepository getRepository()
 * @method \Amethyst\Serializers\OfficeSerializer  getSerializer()
 * @method \Amethyst\Validators\OfficeValidator    getValidator()
 * @method \Amethyst\Authorizers\OfficeAuthorizer  getAuthorizer()
 */
class OfficeManager extends Manager
{
    use ConfigurableManager;

    /**
     * @var string
     */
    protected $config = 'amethyst.office.data.office';
}
