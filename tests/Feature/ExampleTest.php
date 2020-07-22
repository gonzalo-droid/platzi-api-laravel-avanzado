<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * creat test
     * 
     * php artisan make:test LoginTest
     * 
     * 
     * run test especifico
     * vendor/bin/phpunit --filter test_index
     * 
     * 
     * 
     *   Para ejecutar solo un test:
     *   $vendor/bin/phpunit --filter methodName path/to/file.php
     *   Para ejecutar todos los tests de una clase:
     *   $vendor/bin/phpunit --filter className
     * 
     * 
     * @return void
     */
    public function testBasicTest()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
