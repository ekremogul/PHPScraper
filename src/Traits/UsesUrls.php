<?php

namespace Ekremogul\PHPScraper\Traits;

trait UsesUrls
{
    /**
     * @return string
     * @throws \Exception
     */
    public function currentUrl(): string
    {
        if($this->currentPage === null) {
            throw new \Exception('You can not access the URL before your first navigation using `go`.');
        }
        return (string) $this->currentPage->getUri();
    }

    public function currentHost(): string
    {
        return Uri::createFromString($this->currentUrl())->getHost();
    }
}
