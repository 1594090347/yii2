<?php


namespace yiiunit\framework\log;

/**
 * @group log
 * @group db
 * @group pgsql
 */
class PgSQLTargetTest extends DbTargetTest
{
    protected static $driverName = 'pgsql';
}