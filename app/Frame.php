<?php

namespace App;

/**
 * Class Frame
 *
 * @package App
 */
class Frame
{
    /**
     * @var int
     */
    private $left;

    /**
     * @var int
     */
    private $top;

    /**
     * @var Color
     */
    private $color;

    /**
     * Frame constructor.
     * @param int $left
     * @param int $top
     * @param Color $color
     */
    public function __construct(int $left, int $top, Color $color)
    {
        $this->left = $left;
        $this->top = $top;
        $this->color = $color;
    }

    /**
     * @return int
     */
    public function getLeft(): int
    {
        return $this->left;
    }

    /**
     * @return int
     */
    public function getTop(): int
    {
        return $this->top;
    }

    /**
     * @return Color
     */
    public function getColor(): Color
    {
        return $this->color;
    }
}
