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
     * @var Frame[][]
     */
    private $grid = [];

    /**
     * @var Size
     */
    private $size;

    /**
     * Picture constructor.
     */
    public function __construct()
    {
        $this->size = new Size(20, 20);

        $this->generate();
    }

    private function generate(): void
    {
        for ($this->left = 0; $this->left <= 1200; $this->left = $this->left + $this->size->getWight()) {
            for ($this->top = 0; $this->top <= 600; $this->top = $this->top + $this->size->getHeight()) {
                $frame = $this->getFrame();

                $this->frames[] = $frame;
                $this->grid[$this->left][$this->top] = $frame;
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
            $this->size,
            new Color(
                mt_rand(0, 51) * 5,
                mt_rand(0, 51) * 5,
                mt_rand(0, 51) * 5
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
