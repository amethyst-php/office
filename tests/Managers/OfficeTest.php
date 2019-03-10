<?php

namespace Railken\Amethyst\Tests\Managers;

use Railken\Amethyst\Fakers\OfficeFaker;
use Railken\Amethyst\Managers\OfficeManager;
use Railken\Amethyst\Tests\BaseTest;
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
