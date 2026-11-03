<?php

declare(strict_types=1);

namespace Tavaan\Engine\Optimizer\Console;

use Tavaan\Core\Contracts\Console\CommandInterface;

/**
 * autoload:cache command.
 */
final class Autoload_cacheCommand implements CommandInterface
{
    public function name(): string
    {
        return 'autoload:cache';
    }

    public function description(): string
    {
        return 'Run autoload:cache (TODO: fill description).';
    }

    public function handle(array $args = []): int
    {
        // TODO: پیاده‌سازی command مطابق مستندات.
        return 0;
    }
}
