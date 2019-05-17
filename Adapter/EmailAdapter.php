<?php
declare(strict_types=1);

namespace DesignPatterns\Adapter;

use DesignPatterns\Resources\EmailService;

/**
 * Class EmailAdapter
 *
 * If the EmailService is frequently updating or changed the method name `send` for example
 * and `send` is used all over the project, you only update the method name in the adapter.
 *
 * @package DesignPatterns\Adapter
 */
final class EmailAdapter implements EmailAdapterInterface
{
    /**
     * @var \DesignPatterns\Resources\EmailService
     */
    private $emailService;

    /**
     * EmailAdapter constructor.
     *
     * @param \DesignPatterns\Resources\EmailService $emailService
     */
    public function __construct(EmailService $emailService)
    {
        $this->emailService = $emailService;
    }

    /**
     * Send email.
     *
     * This is the adapter method for EmailService::send()
     *
     * @param string $recipient
     *
     * @return string
     */
    public function sendMail(string $recipient): string
    {
        return $this->emailService->send($recipient);
    }
}
