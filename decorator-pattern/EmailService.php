<?php
declare(strict_types=1);

namespace Decorator;

final class EmailService
{
    /**
     * Return email address.
     *
     * @return string
     */
    public function getEmail(): string
    {
        return 'john.doe@email.com';
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
        return 'Email sent to ' . $recipient;
    }
}
