<?php
declare(strict_types=1);

namespace DesignPatterns\Structural\Decorator;

use DesignPatterns\Resources\EmailService;

final class EmailServiceDecorator implements EmailServiceDecoratorInterface
{
    /**
     * @var \DesignPatterns\Resources\EmailService
     */
    private $emailService;

    /**
     * Wrapper constructor.
     *
     * @param \DesignPatterns\Resources\EmailService $emailService
     */
    public function __construct(EmailService $emailService)
    {
        $this->emailService = $emailService;
    }

    /**
     * Return list of contacts.
     *
     * NOTE: This is the decorator,
     * Adding functionality to the email service without refactoring EmailService class.
     *
     * @return array
     */
    public function getContacts(): array
    {
        return [
            'john.wick.continental.com',
            'jason.bourne@program.com'
        ];
    }

    /**
     * Get the user's name
     *
     * @return string
     */
    public function getEmail(): string
    {
        return $this->emailService->getEmail();
    }

    /**
     * Send email.
     *
     * @param string $recipient
     *
     * @return string
     */
    public function send(string $recipient): string
    {
        return $this->emailService->send($recipient);
    }
}
