<?php

namespace App;

/**
 * Interface ApplicationInterface
 *
 * @package App
 */
interface ApplicationInterface
{
    /**
     * @return null|string
     */
    public function title(): ?string;

    /**
     * @return null|string
     */
    public function render(): ?string;
}
