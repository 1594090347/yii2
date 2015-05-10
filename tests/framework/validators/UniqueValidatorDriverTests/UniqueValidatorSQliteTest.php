<?php

namespace yiiunit\framework\validators\UniqueValidatorDriverTests;

use yiiunit\framework\validators\UniqueValidatorTest;

/**
 * @group validators
 * @group sqlite
 * @group db
 */
class UniqueValidatorSQliteTest extends UniqueValidatorTest
{
    protected $driverName = 'sqlite';
}