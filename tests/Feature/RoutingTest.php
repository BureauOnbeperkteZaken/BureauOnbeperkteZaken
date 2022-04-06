<?php

namespace Tests\Feature;

use LogicException;
use Symfony\Component\HttpFoundation\Exception\BadRequestException;
use SebastianBergmann\RecursionContext\InvalidArgumentException;
use PHPUnit\Framework\ExpectationFailedException;
use Tests\TestCase;

/**
 * Routing test class
 *
 * Class responsible for testing all routing options
 *
 * @package Tests\Feature\RoutingTest
 */

class RoutingTest extends TestCase
{
    /**
     * Array of app routing options to test
     *
     * @var array
     */
    private array $appRoutes = [
        ['path' => '/', 'expectedResult' => 200],
        ['path' => '/does-not-exist', 'expectedResult' => 404]
    ];

    /**
     * Array of panel routing options to test
     * @var array
     */
    private array $panelRoutes = [
        ['path' => '/', 'expectedResult' => 302],
        ['path' => '/does-not-exist', 'expectedResult' => 404]
    ];

    /**
     * Tests all routing options in $appRoutes
     *
     * @return void
     * @throws LogicException
     * @throws BadRequestException
     * @throws InvalidArgumentException
     * @throws ExpectationFailedException
     */
    public function testAppRouting()
    {
        foreach ($this->appRoutes as $value) {
            $response = $this->get($value['path']);

            $response->assertStatus($value['expectedResult']);
        }
    }

    /**
     * Tests all panel routing options in $panelRoutes
     *
     * @return void
     * @throws LogicException
     * @throws BadRequestException
     * @throws InvalidArgumentException
     * @throws ExpectationFailedException
     */
    public function testPanelRouting()
    {
        foreach ($this->panelRoutes as $value) {
            $response = $this->get('/panel' . $value['path']);

            $response->assertStatus($value['expectedResult']);
        }
    }
}
