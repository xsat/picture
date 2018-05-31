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
     * @var Frame
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
            $this->left,
            $this->top,
            new Color(
                rand(0, 255),
                rand(0, 255),
                rand(0, 255)
            )
        );
    }

    /**
     * @return string
     */
    public function render(): string
    {
        $content = '';

        foreach ($this->frames as $frame) {
            $content .= $this->renderFrame($frame);
        }

        return $content;
    }

    /**
     * @param Frame $frame
     *
     * @return string
     */
    private function renderFrame(Frame $frame): string
    {
        return '<div style="' .
            'width: ' . $this->size . 'px; ' .
            'height: ' . $this->size . 'px; ' .
            'position: absolute; ' .
            'left: ' . $frame->getLeft() . 'px;' .
            'top: ' . $frame->getTop() . 'px; ' .
            'background: rgb(' .
            $frame->getColor()->getRed() . ',' .
            $frame->getColor()->getGreen() . ',' .
            $frame->getColor()->getBlue() .
            ')"></div>';
    }
}
