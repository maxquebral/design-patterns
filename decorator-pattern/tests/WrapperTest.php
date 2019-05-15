<?php
declare(strict_types=1);

namespace Test\Decorator;

use Decorator\EmailService;
use Decorator\Wrapper;
use Test\DesignPatterns\TestCase;

final class WrapperTest extends TestCase
{
    /**
     * Should return list of contacts.
     *
     * @return void
     */
    public function testGetContacts(): void
    {
        $wrapper = new Wrapper(new EmailService());

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
        $wrapper = new Wrapper(new EmailService());

        self::assertEquals('john.doe@email.com', $wrapper->getEmailAddress());
    }

    /**
     * Should send email to the recipient.
     *
     * @return void
     */
    public function testSendEmail(): void
    {
        $recipient = 'james.bond@agent.com';

        $wrapper = new Wrapper(new EmailService());

        self::assertEquals('Email sent to ' . $recipient, $wrapper->sendEmail($recipient));
    }
}