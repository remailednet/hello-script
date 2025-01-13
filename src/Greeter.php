<?php

declare(strict_types=1);

namespace OpenHands\HelloScript;

/**
 * A simple greeter class that generates customized hello messages.
 */
class Greeter
{
    private const DEFAULT_NAME = 'world';

    /**
     * Generate a greeting message.
     *
     * @param string|null $name The name to greet (optional)
     * @return string The greeting message
     */
    public function sayHello(?string $name = null): string
    {
        $name = $name ?: self::DEFAULT_NAME;
        return "hello {$name}!";
    }
}