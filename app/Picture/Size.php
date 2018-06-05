<?php

namespace App\Picture;

/**
 * Class Size
 *
 * @package App\Picture
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
