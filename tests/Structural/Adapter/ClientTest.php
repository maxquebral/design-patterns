<?php
declare(strict_types=1);

namespace Test\DesignPatterns\Structural\Adapter;

use DesignPatterns\Resources\EmailService;
use DesignPatterns\Structural\Adapter\Client;
use DesignPatterns\Structural\Adapter\EmailAdapter;
use Test\DesignPatterns\TestCase;

class ClientTest extends TestCase
{
    /**
     * Should return true.
     *
     * @return void
     */
    public function testDoSomething(): void
    {
        $emailAdapter = new EmailAdapter(new EmailService());

        $clientA = new Client($emailAdapter);

        self::assertTrue($clientA->doSomething());
    }
}
