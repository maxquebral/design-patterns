<?php
declare(strict_types=1);

namespace DesignPatterns\Structural\Adapter;

interface EmailAdapterInterface
{
    /**
     * Send email.
     *
     * @param string $recipient
     *
     * @return string
     */
    public function sendMail(string $recipient): string;
}
