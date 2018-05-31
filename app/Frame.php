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
     * @var Position
     */
    private $position;

    /**
     * @var Size
     */
    private $size;

    /**
     * @var Color
     */
    private $color;

    /**
     * Frame constructor.
     * @param Position $position
     * @param Size $size
     * @param Color $color
     */
    public function __construct(Position $position, Size $size, Color $color)
    {
        $this->position = $position;
        $this->size = $size;
        $this->color = $color;
    }

    /**
     * @return Position
     */
    public function getPosition(): Position
    {
        return $this->position;
    }

    /**
     * @return Size
     */
    public function getSize(): Size
    {
        return $this->size;
    }

    /**
     * @return Color
     */
    public function getColor(): Color
    {
        return $this->color;
    }
}
