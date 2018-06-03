<?php

namespace App;

/**
 * Class View
 *
 * @package App
 */
class View
{
    /**
     * @param string $name
     *
     * @return null|string
     */
    public function particle(string $name): ?string
    {
        ob_start();

        include_once __DIR__ .
            DIRECTORY_SEPARATOR . 'Views' .
            DIRECTORY_SEPARATOR . $name . '.phtml';

        return ob_get_clean();
    }
}
