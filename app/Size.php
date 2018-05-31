<?php

namespace App;

/**
 * Class Size
 *
 * @package App
 */
class Size
{
    /**
     * @var int
     */
    private $wight;

    /**
     * @var int
     */
    private $height;

    /**
     * Size constructor.
     * @param int $wight
     * @param int $height
     */
    public function __construct(int $wight, int $height)
    {
        $this->wight = $wight;
        $this->height = $height;
    }

    /**
     * @return int
     */
    public function getWight(): int
    {
        return $this->wight;
    }

    /**
     * @return int
     */
    public function getHeight(): int
    {
        return $this->height;
    }
}
