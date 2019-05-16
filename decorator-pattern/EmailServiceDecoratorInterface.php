<?php
declare(strict_types=1);

namespace Decorator;

interface EmailServiceDecoratorInterface
{
    /**
     * Return list of contacts.
     *
     * @return array
     */
    public function getContacts(): array;

    /**
     * Get the email.
     *
     * @return string
     */
    public function getEmail(): string;

    /**
     * Send email.
     *
     * @param string $recipient
     *
     * @return string
     */
    public function send(string $recipient): string;
}
