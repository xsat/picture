<?php

namespace App;

/**
 * Class Picture
 *
 * @package App
 */
class Picture
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
     * @var Frame[]
     */
    private $frames = [];

    /**
     * @var int
     */
    private $size = 10;

    /**
     * Picture constructor.
     */
    public function __construct()
    {
        $this->generate();
    }

    private function generate(): void
    {
        for ($this->left = 0; $this->left <= 1200; $this->left = $this->left + $this->size) {
            for ($this->top = 0; $this->top <= 600; $this->top = $this->top + $this->size) {
                $this->frames[] = $this->getFrame();
            }
        }
    }

    /**
     * @return Frame
     */
    private function getFrame(): Frame
    {
        return new Frame(
            new Position($this->left, $this->top),
            new Size($this->size, $this->size),
            new Color(
                rand(0, 51) * 5,
                rand(0, 51) * 5,
                rand(0, 51) * 5
            )
        );
    }

    /**
     * @return Frame[]
     */
    public function getFrames(): array
    {
        return $this->frames;
    }
}
