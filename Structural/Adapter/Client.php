<?php
declare(strict_types=1);

namespace DesignPatterns\Structural\Adapter;

final class Client
{
    /**
     * @var \DesignPatterns\Structural\Adapter\EmailAdapterInterface
     */
    private $emailAdapter;

    /**
     * ClientA constructor.
     *
     * @param \DesignPatterns\Structural\Adapter\EmailAdapterInterface $emailAdapter
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
