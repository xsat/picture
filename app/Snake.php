<?php

namespace App;

/**
 * Class Snake
 *
 * @package App
 */
class Snake
{
    /**
     * @param string $text
     *
     * @return string
     */
    public function encode(string $text): string
    {
        $content = '';

        foreach (str_split($text) as $chr) {
//            $content .= '<div style="background: white;height:24px; width: ' . ord($chr) . 'px">' . $chr . '</div>';
            $content .= '<div>' . str_repeat('.', ord($chr)) . '</div>';
        }

        return $content;
    }
}
