<?php
declare(strict_types=1);

namespace Test\DesignPatterns\Adapter;

use DesignPatterns\Adapter\Client;
use DesignPatterns\Adapter\EmailAdapter;
use DesignPatterns\Resources\EmailService;
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
