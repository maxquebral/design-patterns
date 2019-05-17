<?php
declare(strict_types=1);

namespace DesignPatterns\Adapter;

final class Client
{
    /**
     * @var \DesignPatterns\Adapter\EmailAdapterInterface
     */
    private $emailAdapter;

    /**
     * ClientA constructor.
     *
     * @param \DesignPatterns\Adapter\EmailAdapterInterface $emailAdapter
     */
    public function __construct(EmailAdapterInterface $emailAdapter)
    {
        $this->emailAdapter = $emailAdapter;
    }

    /**
     * Do something.
     *
     * @return bool
     */
    public function doSomething(): bool
    {
        // code here...

        $this->emailAdapter->sendMail('batman@gotham.com');

        return true;
    }
}
