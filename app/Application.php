<?php

namespace App;

/**
 * Class Application
 *
 * @package App
 */
class Application extends Snake implements ApplicationInterface
{
    private const LAYOUT = 'index.phtml';
    private const HOME_PARTICLE = 'home.phtml';
    private const NOT_FOUND_PARTICLE = 'not_found.phtml';

    /**
     *
     * @var string
     */
    private $particle = self::HOME_PARTICLE;

    /**
     * @var array
     */
    private $routes = [
        '/test.html' => 'test.phtml',
    ];

    /**
     * @var array
     */
    private $titles = [
        self::HOME_PARTICLE => 'Picture 30',
        self::NOT_FOUND_PARTICLE => '404',
        'test.phtml' => 'My test page',
    ];

    /**
     * Application constructor.
     */
    public function __construct()
    {
        if (isset($_REQUEST['_url'])) {
            $this->particle = $this->routes[$_REQUEST['_url']] ??
                self::NOT_FOUND_PARTICLE;
        }
    }

    public function run(): void
    {
        if ($this->particle === self::NOT_FOUND_PARTICLE) {
            header('HTTP/1.0 404 Not Found');
        }

        echo $this->particle(self::LAYOUT);
    }

    /**
     * @return null|string
     */
    public function title(): ?string
    {
        return $this->titles[$this->particle] ?? null;
    }

    /**
     * @return null|string
     */
    public function render(): ?string
    {
        return $this->particle(
            'particles' . DIRECTORY_SEPARATOR . $this->particle
        );
    }

    /**
     * @param string $name
     *
     * @return null|string
     */
    private function particle(string $name): ?string
    {
        ob_start();

        include_once __DIR__ .
            DIRECTORY_SEPARATOR . '..' .
            DIRECTORY_SEPARATOR . 'views' .
            DIRECTORY_SEPARATOR . $name;

        return ob_get_clean();
    }
}
