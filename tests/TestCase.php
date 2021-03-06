<?php

namespace Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;
use Tests\Concerns\RefreshDatabase;


abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;

    protected function setUpTraits(): array
    {
        $uses = parent::setUpTraits();

        if (isset($uses[RefreshDatabase::class])) {
            $this->refreshDatabase();
        }

        return $uses;
    }


}
