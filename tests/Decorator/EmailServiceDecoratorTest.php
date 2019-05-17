<?php
declare(strict_types=1);

namespace Test\DesignPatterns\Decorator;

use DesignPatterns\Resources\EmailService;
use DesignPatterns\Structural\Decorator\EmailServiceDecorator;
use Test\DesignPatterns\TestCase;

final class EmailServiceDecoratorTest extends TestCase
{
    /**
     * Should return list of contacts.
     *
     * @return void
     */
    public function testGetContacts(): void
    {
        $wrapper = new EmailServiceDecorator(new EmailService());

        self::assertEquals([
            'john.wick.continental.com',
            'jason.bourne@program.com'
        ], $wrapper->getContacts());
    }

    /**
     * Should return name.
     *
     * @return void
     */
    public function testGetName(): void
    {
        $wrapper = new EmailServiceDecorator(new EmailService());

        self::assertEquals('john.doe@email.com', $wrapper->getEmail());
    }

    /**
     * Should send email to the recipient.
     *
     * @return void
     */
    public function testSendEmail(): void
    {
        $recipient = 'james.bond@agent.com';

        $wrapper = new EmailServiceDecorator(new EmailService());

        self::assertEquals('Email sent to ' . $recipient, $wrapper->send($recipient));
    }
}
