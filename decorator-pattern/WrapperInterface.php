<?php
declare(strict_types=1);

namespace Decorator;

interface WrapperInterface
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
    public function getEmailAddress(): string;

    /**
     * Send email.
     *
     * @param string $recipient
     *
     * @return string
     */
    public function sendEmail(string $recipient): string;
}
