<?php

namespace Amethyst\Tests\Managers;

use Amethyst\Fakers\OfficeFaker;
use Amethyst\Managers\OfficeManager;
use Amethyst\Tests\BaseTest;
use Railken\Lem\Support\Testing\TestableBaseTrait;

class OfficeTest extends BaseTest
{
    use TestableBaseTrait;

    /**
     * Manager class.
     *
     * @var string
     */
    protected $manager = OfficeManager::class;

    /**
     * Faker class.
     *
     * @var string
     */
    protected $faker = OfficeFaker::class;
}
