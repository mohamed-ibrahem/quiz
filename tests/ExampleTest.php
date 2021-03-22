<?php

namespace Getsircles\Quiz\Tests;

use Orchestra\Testbench\TestCase;
use Getsircles\Quiz\QuizServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [QuizServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
