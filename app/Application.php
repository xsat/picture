<?php

namespace App;

/**
 * Class Application
 *
 * @package App
 */
class Application implements ApplicationInterface
{
    /**
     * @var View
     */
    private $view;

    /**
     * @var string
     */
    private $layout = 'index';
    /**
     *
     * @var string
     */
    private $current = 'main';

    /**
     * Application constructor.
     */
    public function __construct()
    {
        $this->view = new View();
    }

    /**
     * @return string
     */
    public function run(): string
    {
        return $this->view->particle($this->layout);
    }

    /**
     * @return null|string
     */
    public function render(): ?string
    {
        return $this->view->particle($this->current);
    }
}
